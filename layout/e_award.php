<button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#award">
兌獎
</button>

  <div class="modal fade" id="award" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="awardLabel">請選要兌哪一期</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="award.php" method="post">
        <div class="modal-body">

        <div class="form-group row">
        <div div class="col-3">          
          <label for="award_years">年份:</label>
        </div>
        <div class="col">
        <select name="years" class="custom-select" id="award_years">
            <option selected>請選擇發票年份</option>
            <option value="<?php echo date("Y",strtotime(" -1 year"));?>"><?php echo date("Y",strtotime(" -1 year"));?></option>
            <option value="<?php echo date("Y");?>"><?php echo date("Y");?></option>
            <option value="<?php echo date("Y",strtotime(" 1 year"));?>"><?php echo date("Y",strtotime(" 1 year"));?></option>
          </select>
        </div>
        </div>

        <div class="form-group row">
        <div div class="col-3">          
          <label for="award_period">期別:</label>
        </div>
        <div class="col">
          <select name="period" class="custom-select" id="award_period">
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
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
          <button type="submit" class="btn btn-primary">確認</button>
        </div>
        </form>
      </div>
    </div>
  </div>