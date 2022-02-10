<?php include 'header.php';?>

<style>
    body{
        background-color: #545b62;
    }
</style>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card bg-info text-white">
                    <div class="card-header text-center bg-dark">
                        <h4> Sum of Series</h4>
                    </div>
                    <div class="card-body">
                        <form action="action.php" method="POST">
                            <div class="form-group row">
                                <label class="col-form-label col-md-4">Starting and Ending Number</label>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" placeholder="Starting Number" name="s_num" value="<?php echo isset($_POST['s_num']) ? $_POST['s_num'] : '';?>"/>
                                </div>
                                <div class="col-md-4">
                                    <input type="number" class="form-control" placeholder="Ending Number" name="e_num" value="<?php echo isset($_POST['e_num']) ? $_POST['e_num'] : '';?>"/>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3">Result</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" rows="5" readonly ><?php echo isset($result) ? $result : '';?></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-form-label col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-dark" name="series_btn" value="Submit"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php';?>




