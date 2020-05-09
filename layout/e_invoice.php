<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#invoice">
  輸入獎號
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="invoice" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="invoiceLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="invoiceLabel">輸入獎號</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="save_award.php" method="post">>
        <div class="modal-body">
         
        
        <div class="form-group row">
        <div div class="col-2">          
          <label for="invoice_Special_award">特別獎:</label>
        </div>
        <div class="col">
          <input type="text" class="form-control" id="invoice_Special_award" name="Special_award">
        </div>
        </div>
        
        
        
        
        
        
        
        
        


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
          <button type="button" class="btn btn-primary">確認</button>
        </div>
        </form>
      </div>
    </div>
  </div>