<!-- JQUERY STEP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-steps/1.1.0/jquery.steps.min.js"></script>
<link rel="stylesheet" href="css/style.css">
<div class="wrapper">
    <form action="process-register.php" method="POST">
        <div id="wizard">
            <section>
                <div class="form-group">
                    <h4>User Name *</h4>
                    <input type="text" class="form-control" name="txtName" placeholder="">
                </div>

                <div class="form-row">
                    <h4>Email *</h4>
                    <input type="text" class="form-control" name="txtEmail" placeholder="">
                </div>

                <div class="form-row">
                    <h4>Password *</h4>
                    <input type="password" class="form-control" name="txtPass1" placeholder="">
                </div>

                <div class="form-row">
                    <h4>Retype Password * </h4>
                    <input type="password" class="form-control" name="txtPass2" placeholder="">
                </div>

                <div class="col text-center">
                    <button class="btn btn-primary" name="btnSubmit"> Register </button>
                </div>
            </section>
        </div>
    </form>
</div>

