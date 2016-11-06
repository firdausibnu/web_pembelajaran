<form name="user" id="user" onSubmit="return validateForm()" action="proc/add/user.php" method="post" enctype="multipart/form-data">
    <input type="file" id="excel" name="excel" required/>
    <input type="submit" name="submit" value="Import" /><br/>
</form>

<script type="text/javascript">
//    validasi form (hanya file .csv yang diijinkan)
    function validateForm()
    {
        function hasExtension(inputID, exts) {
            var fileName = document.getElementById(inputID).value;
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
        }
 
        if(!hasExtension('excel', ['.csv'])){
            alert("Hanya file XLS (Excel 2003) yang diijinkan.");
            return false;
        }
    }
</script>