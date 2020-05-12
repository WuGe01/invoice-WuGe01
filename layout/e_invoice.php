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
        <form action="save_award.php" method="post">
        <div class="modal-body">
         
        



        <div class="form-group row">
        <div div class="col-3">          
          <label for="invoice_years">年份:</label>
        </div>
        <div class="col">
        <select name="years" class="custom-select" id="invoice_years">
            <option selected>請選擇發票年份</option>
            <option value="<?php echo date("Y",strtotime(" -1 year"));?>"><?php echo date("Y",strtotime(" -1 year"));?></option>
            <option value="<?php echo date("Y");?>"><?php echo date("Y");?></option>
            <option value="<?php echo date("Y",strtotime(" 1 year"));?>"><?php echo date("Y",strtotime(" 1 year"));?></option>
          </select>
        </div>
        </div>

        <div class="form-group row">
        <div div class="col-3">          
          <label for="invoice_period">期別:</label>
        </div>
        <div class="col">
          <select name="period" class="custom-select" id="invoice_period">
            <option selected>請選擇發票期別</option>
            <option value="1">1,2月</option>
            <option value="2">3,4月</option>
            <option value="3">5,6月</option>
            <option value="4">7,8月</option>
            <option value="5">9,10月</option>
            <option value="6">11,12月</option>
          </select>
        </div>
        </div>

        <div class="form-group row">
        <div div class="col-3">          
          <label for="invoice_Special_award">特別獎:</label>
        </div>
        <div class="col">
          <input type="text" class="form-control" id="invoice_Special_award" name="Special_award">
        </div>
        </div>
        
        <div class="form-group row">
        <div div class="col-3">          
          <label for="invoice_S_award">特獎:</label>
        </div>
        <div class="col">
          <input type="text" class="form-control" id="invoice_S_award" name="S_award">
        </div>
        </div>
        
        <div class="form-group row">
        <div div class="col-3">          
          <label for="invoice_h1_award">頭獎(一):</label>
        </div>
        <div class="col">
          <input type="text" class="form-control" id="invoice_h1_award" name="h1_award">
        </div>
        </div>
        
        <div class="form-group row">
        <div div class="col-3">          
          <label for="invoice_h2_award">頭獎(二):</label>
        </div>
        <div class="col">
          <input type="text" class="form-control" id="invoice_h2_award" name="h2_award">
        </div>
        </div>
        
        <div class="form-group row">
        <div div class="col-3">          
          <label for="invoice_h3_award">頭獎(三):</label>
        </div>
        <div class="col">
          <input type="text" class="form-control" id="invoice_h3_award" name="h3_award">
        </div>
        </div>
        
        <div class="form-group row">
        <div div class="col-3">          
          <label for="invoice_six_award">六獎:</label>
        </div>
        <div class="col">
          <input type="text" class="form-control" id="invoice_six_award" name="six_award">
        </div>
        </div>
        
        <div class="form-group row">
        <div div class="col-3">          
          <label for="invoice_six2_award">增開六獎(一):</label>
        </div>
        <div class="col">
          <input type="text" class="form-control" id="invoice_six2_award" name="six2_award">
        </div>
        </div>
        
        <div class="form-group row">
        <div div class="col-3">          
          <label for="invoice_six3_award">增開六獎(二):</label>
        </div>
        <div class="col">
          <input type="text" class="form-control" id="invoice_six3_award" name="six3_award">
        </div>
        </div>
        
        
        
        
        
        
        
        
        


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
          <button type="submit" class="btn btn-primary">確認</button>
        </div>
        </form>
      </div>
    </div>
  </div>