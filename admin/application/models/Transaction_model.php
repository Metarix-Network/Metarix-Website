<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Transaction_model extends CI_Model{ 
     public function __construct() {
           parent::__construct(); 
     }
	 
	 /****************************************************
			function to get transaction list
   ****************************************************/
	 function get_users(){
		$this->db->select(DB_PREFIX.'transaction.*');
		$this->db->from(DB_PREFIX.'transaction');
		$result = $this->db->get()->result();
		return $result;
	 }

	/****************************************************
			function to get transaction list
   ****************************************************/	 
	 function allposts($limit,$start,$col,$dir,$user_id = '')
	 {
		$this->db->select(DB_PREFIX.'transaction.*');
		$this->db->from(DB_PREFIX.'transaction');
		$this->db->limit($limit,$start);
		$this->db->order_by(DB_PREFIX.'transaction.'.$col,'DESC');
		
		if(!empty($user_id))
		{
			$this->db->where('user_id',$user_id);
		}
		
		$query = $this->db->get();
		if($query->num_rows()>0)
        {
			return $query->result();
		}
		else
        {
            return null;
        }
	 }
	 
	 /****************************************************
			function to get transaction search
   ****************************************************/
	function posts_search($limit,$start,$search,$col,$dir,$user_id = '')
    {
		$this->db->select(DB_PREFIX.'transaction.*,');
		$this->db->from(DB_PREFIX.'transaction');
		
		$this->db->like('ico_transaction.walletAddress',$search);
		
		
		$this->db->or_like('ico_transaction.bnbTokens',$search);
		
		
		$this->db->or_like('ico_transaction.mtrxPrice',$search);
		
		
		$this->db->or_like('ico_transaction.date',$search);
		
		
		
		
		$this->db->limit($limit,$start);
		$this->db->order_by(DB_PREFIX.'transaction.'.$col,'DESC');
		
		$query = $this->db->get();
		if($query->num_rows()>0)
        {
			
            return $query->result(); 

        }
        else
        {
            return null;
        }
    }
	
	/****************************************************
			function to get transaction search count
   ****************************************************/
	function posts_search_count($search,$user_id = "")
    {
        $this->db->select(DB_PREFIX.'transaction.*');
		$this->db->from(DB_PREFIX.'transaction');
		
		$this->db->like('ico_transaction.walletAddress',$search);
		
		
		$this->db->or_like('ico_transaction.bnbTokens',$search);
		
		
		$this->db->or_like('ico_transaction.mtrxPrice',$search);
		
		
		$this->db->or_like('ico_transaction.date',$search);
		$query = $this->db->get();
		return $query->num_rows();
       
    }

	/****************************************************
			function to get transaction count
   ****************************************************/	
	function allposts_count($user_id = ""){
		 $this->db->select(DB_PREFIX.'transaction.*');
		$this->db->from(DB_PREFIX.'transaction');
		if(!empty($user_id))
		{
			$this->db->where('user_id',$user_id);
		}
		$query = $this->db->get();
		return $query->num_rows();
	}
	
	/****************************************************
			function is use to delete the users
   ****************************************************/
	function delete_transaction($id){	
		$this->db->where('id',$id);
		$this->db->delete(DB_PREFIX.'transaction');
	}
	
	/****************************************************
			function is use to get invest users
   ****************************************************/
	function get_investuser($user_id){
		$this->db->select(DB_PREFIX.'transaction.*');
		$this->db->from(DB_PREFIX.'transaction');
		$this->db->where('user_id',$user_id);
		$result = $this->db->get()->row();
		return $result;
	}

	/****************************************************
			function to get transaction list
   ****************************************************/	 
	 function getAllTransactions()
	 {
		$this->db->select(DB_PREFIX.'transaction.*');
		$this->db->from(DB_PREFIX.'transaction');
		$query = $this->db->get();
		if($query->num_rows()>0)
        {
			return $query->result();
		}
		else
        {
            return false;
        }
	 }

	 /************************************************************************************************
	 * 			function used for merge transactions
	 * *********************************************************************************************/
	function mergeTransactions()
	{
		
		$this->db->empty_table('realease_action');
		$this->db->empty_table('realease_transactions');

		$this->db->select('*');
		$this->db->from('transactionRecords');
		//$this->db->where('walletAddress','0x1bd61cf824ee76ecf939f55b50014d1f40d13d8d');
		$this->db->group_by('walletAddress');
		$query = $this->db->get();
		if($query->num_rows()>0)
        {
			$result = $query->result();
			if(!empty($result))
			{
				foreach($result as $key=>$value)
				{
					$bnbTokens = "0";
					$mtrxPrice = "0";
					if(!empty($value->walletAddress))
					{
						/*------------delete record from merge table--------------*/
						$this->db->where('walletAddress',$value->walletAddress);
						$this->db->delete(DB_PREFIX.'transaction');

						$this->db->select_sum('bnbTokens')->where('walletAddress',$value->walletAddress);
						$bnbTokens = $this->db->get('transactionRecords')->row()->bnbTokens; 

						$this->db->select_sum('mtrxPrice')->where('walletAddress',$value->walletAddress);
						$mtrxPrice = $this->db->get('transactionRecords')->row()->mtrxPrice;   
					}
					
					
					$insert['walletAddress'] = $value->walletAddress;
					$insert['bnbTokens'] = $bnbTokens;
					$insert['bnbTokens_remain'] = $bnbTokens;
					$insert['mtrxPrice'] = $mtrxPrice;
					$insert['mtrxPrice_remain'] = $mtrxPrice;
					$insert['rate'] = '0';
					$this->db->insert(DB_PREFIX.'transaction',$insert);
				}
				return true;
			}
		}
		else
        {
            return false;
            //echo "empty";
        }
	}

	/****************************************************
			function to get transaction list
   ****************************************************/	 
	 function getRealeseList()
	 {
		$this->db->select('*');
		$this->db->from('realease_action');
		$query = $this->db->get();
		if($query->num_rows()>0)
        {
			return $query->result();
		}
		else
        {
            return false;
        }
	 }

	/************************************************************************************************
	 * 			function used for realease amount
	 * *********************************************************************************************/
	function realeaseAmount($realease_number="")
	{
		
		$rate = "20";
		$this->db->select('*');
		$this->db->from('ico_transaction');
		//$this->db->where('walletAddress','0x1bd61cf824ee76ecf939f55b50014d1f40d13d8d');
		$query = $this->db->get();
		if($query->num_rows()>0)
        {
			$result = $query->result();
			if(!empty($result))
			{
				$rate = "5";
				if((int)$realease_number <= 1)
				{
					$rate = "20";
				}
				foreach($result as $key=>$value)
				{
					$insert['walletAddress'] = $value->walletAddress;
					$insert['bnbTokens'] = $value->bnbTokens;
					$insert['mtrxPrice'] = $value->mtrxPrice;
					$remainmtrx = (float)$value->mtrxPrice*(int)$rate/100;
					$mtrxPrice_remain = (float)$value->mtrxPrice_remain-(float)$remainmtrx;
					if($mtrxPrice_remain <= 0)
					{
						$mtrxPrice_remain = 0;
					}
					$insert['mtrxPrice_remain'] = $mtrxPrice_remain;

					$remainbnb = (float)$value->bnbTokens*(int)$rate/100;
					$bnbTokens_remain = (float)$value->bnbTokens_remain-(float)$remainbnb;
					if($bnbTokens_remain <= 0)
					{
						$bnbTokens_remain = 0;
					}
					$insert['bnbTokens_remain'] = $bnbTokens_remain;
					$insert['rate'] = $rate;
					$insert['realease_number'] = $realease_number;
					$insert['transfer'] = $remainmtrx;
					$this->db->insert('realease_transactions',$insert);

					$update['mtrxPrice_remain'] = $mtrxPrice_remain;
					$oldrate = $value->rate;
					$update['rate'] = (int)$oldrate+(int)$rate;
					$update['mtrxPrice_remain'] = $mtrxPrice_remain;
					$update['bnbTokens_remain'] = $bnbTokens_remain;
					$this->db->where('walletAddress',$value->walletAddress);
					$this->db->update('ico_transaction',$update);
				}
				//return true;
			}
		}
		$insertrealise['rate'] = $rate;
		$this->db->insert('realease_action',$insertrealise);
		return true;
	}

	/****************************************************
			function to get transaction list
   ****************************************************/	 
	 function getAllRealeseTransactions()
	 {
		$this->db->select('*');
		$this->db->from('realease_transactions');
		$query = $this->db->get();
		if($query->num_rows()>0)
        {
			return $query->result();
		}
		else
        {
            return false;
        }
	 }
}