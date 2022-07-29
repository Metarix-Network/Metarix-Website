<link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/datatables/css/jquery.dataTables.min.css"></style>
<link rel="stylesheet" href="<?php echo base_url(); ?>assest/css/datatables/css/jquery.dataTables.min.css"></style>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript"src="<?php echo base_url(); ?>assest/css/datatables/js/jquery.dataTables.min.js"></script>
<style>	
.search_div {
    float: right;
}
</style>	
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                     <h4 class="text_gradient">Release Transactions</h4>
                     <div class="clearfix"></div>
                </div>
                <div class="card">
                <div class="card-body">
                
                  
                  
                </div>
              </div>
    		    <div class="white">
    			    <div class="x_content table-responsive">
        				<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                            <thead>
                                <tr>
                                    <th class="head_text_gradient">Wallet Address</th>
                                    <th class="head_text_gradient">BNB Tokens</th>
                                    <th class="head_text_gradient">Remaining BNB Tokens</th>
                                    <th class="head_text_gradient">MTRX Tokens</th>
                                    <th class="head_text_gradient">Transferred Tokens</th>
                                    <th class="head_text_gradient">Remaining MTRX Tokens</th>
                                    <th class="head_text_gradient">Transferred %</th>
                                    <th class="head_text_gradient">Date</th>
                                </tr>
                            </thead>
                            <tbody>
                            	<?php if(!empty($transactions)) { foreach ($transactions as $key => $value) { ?>
                                <tr>
                                    <td><?=$value->walletAddress?></td>
                                    <td><?=$value->bnbTokens?></td>
                                    <td><?=$value->bnbTokens_remain?></td>
                                    <td><?=$value->mtrxPrice?></td>
                                    <td><?=$value->transfer?></td>
                                    <td><?=$value->mtrxPrice_remain?></td>
                                    <td><?=$value->rate?>%</td>
                                    <td><?=$value->date?></td>
                                </tr>
                              <?php } } ?>
                            </tbody>
                        </table>
    				</div>
                </div>
            </div>
        </div>
    </div>
</div>  
<script type="text/javascript">
function confirmDeletion(id){
	var result = confirm("Are you sure you want to Permanently Delete this transaction?");
	if(result){  
		document.location.href="<?php echo base_url('Transaction/delete_transaction'); ?>/"+id;
		return true; 
	}else{
		return false;
	}
} 
</script>
<!------------------------------------->
<script>
    $(document).ready(function() {
    var table = $('#example').DataTable( {
        responsive: true
    } );
 
    new $.fn.dataTable.FixedHeader( table );
} );

$("#merge_transaction").click(function(){
	$("#loader").show();
  	/*$.ajax({
				url: "<?php echo site_url(); ?>/ledgerSearch",
				method:'post',
				data: {
                    "ledgerselectFrom": ledgerselectFrom,
                    "ledgerselectTo": ledgerselectTo,
                },
                dataType: "json",
                beforeSend: function(){
		    		// Show image container
		    		$("#loader").show();
		   		},
				success:function(response) {
					if(response.status == 'done') {
						$("#ledgerlistshow").html("");
						$("#ledgerlistshow").html(response.result);
						$("#statement_type").val("double");
					}
				},
				complete:function(data){
		    		// Hide image container
		    		$("#loader").hide();
		   		}
	});*/
});

function realeaseAmount(value)
{
    if(value != '')
    {
        $.ajax({
            url: "<?php echo base_url('index.php/Transaction/realeaseAmount'); ?>",
            method:'post',
            data: {
                "realease_number": value,
            },
            dataType: "json",
            beforeSend: function(){
                // Show image container
                $("#loader").show();
            },
            success:function(response) {
                if(response.status == 'done') {
                   window.location.reload(true);
                   /* $("#ledgerlistshow").html("");
                    $("#ledgerlistshow").html(response.result);
                    $("#statement_type").val("double");*/
                }
            },
            complete:function(data){

                // Hide image container
                $("#loader").hide();
                window.location.reload(true);
            }
        });
    }
    
}
</script>