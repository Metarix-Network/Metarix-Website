<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 

class Transaction extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->model('transaction_model');
		$this->load->library('form_validation');
		$this->load->library('pagination'); 
		$this->load->helper('security');
	}
	
	/***********************************************************
			function used to show transaction view
	***********************************************************/
	public function transaction_detail(){
		$data['transactions'] = $this->transaction_model->getAllTransactions();
		$data['realease_action'] = $this->transaction_model->getRealeseList();
		$this->load->template('transaction_detail', $data);
	}
	
	/***********************************************************
			function used for get single user transaction
	***********************************************************/
	public function transaction_details($user_id){
		$data['user_id'] = $user_id;
		$this->load->template('transaction_detail', $this->security->xss_clean($data));
	}
	
	/***********************************************************
			function used for delete transaction
	***********************************************************/
	function delete_transaction($id){
		$data['user'] = $this->transaction_model->delete_transaction($this->security->xss_clean($id));
		redirect('transaction');
	}

	/***********************************************************
			function used for get transactions list
	***********************************************************/	
	public function posts(){
		$columns = array( 
                            0 =>'id', 
                            1 =>'walletAddress',
							2=>'bnbTokens',
							3=>'mtrxPrice',
                            4=> 'date',
						);
			$limit = $this->input->post('length');
		
        $start = $this->input->post('start');
		
        $order = $columns[$this->input->post('order')[0]['column']];
		
		
        $dir = $this->input->post('order')[0]['dir'];
		if($user_id!=""){
			 $totalData = $this->transaction_model->allposts_count();
		}
		else{
        $totalData = $this->transaction_model->allposts_count();
		}
            
        $totalFiltered = $totalData; 
        if(empty($this->input->post('search')['value']))
        {            
            if($user_id!=""){
				$posts = $this->transaction_model->allposts($limit,$start,$order,$dir);
			}
			else{
			$posts = $this->transaction_model->allposts($limit,$start,$order,$dir);
			}
        }
        else {
			
            $search = $this->input->post('search')['value']; 
			if($user_id!=""){
				$posts =  $this->transaction_model->posts_search($limit,$start,$search,$order,$dir);
				$totalFiltered = $this->transaction_model->posts_search_count($search);
			}
			else{
            $posts =  $this->transaction_model->posts_search($limit,$start,$search,$order,$dir);
			
            $totalFiltered = $this->transaction_model->posts_search_count($search);
			}
        }

        $data = array();
        if(!empty($posts))
        {
			foreach ($posts as $post)
            {
                $nestedData['id'] = $start + 1;
                $nestedData['walletAddress'] = $post->walletAddress;
				$nestedData['bnbTokens'] = $post->bnbTokens;
				$nestedData['mtrxPrice'] = $post->mtrxPrice;
				$date  = str_replace(" "," / ",$post->updatedAt);
				$nestedData['date'] = $date;
				$data[] = $nestedData;
				$start++;

            }
        }
		
        $json_data = array(
                    "draw"            => intval($this->input->post('draw')),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $data   
                    );
            
        echo json_encode($json_data);
	}

	/************************************************************************************************
	 * 			function used for merge transactions
	 * *********************************************************************************************/
	function mergeTransactions()
	{
		$this->transaction_model->mergeTransactions();
		redirect('index.php/Transaction/transaction_detail');
	}

	/************************************************************************************************
	 * 			function used for realease amount
	 * *********************************************************************************************/
	function realeaseAmount()
	{
		$realease_number = $this->input->post('realease_number');
		$this->transaction_model->realeaseAmount($realease_number);
		$response['status'] = 'done';
		echo json_encode($response);
	}

	/***********************************************************
			function used to show transaction realise view
	***********************************************************/
	public function realease(){
		$data['transactions'] = $this->transaction_model->getAllRealeseTransactions();
		$this->load->template('transaction_realese', $data);
	}
	
}