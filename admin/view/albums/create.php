<?php if ( ! defined('PATH_PUBLIC')) die ('Bad requested!');
    require_once(PATH_PUBLIC . '/template/admin/header.php');
?>
<div id="wrapper">
	<div class="container">
	    <form method="post" action="admin.php">
	    <input type="hidden" name="c" value="album">
	    <input type="hidden" name="a" value="store">
	    <div class="row">   		
	    	<h2>Create album</h2>
	    </div>
	    <div class="row">   		
	    	<label>anh:</label>
	    </div>
	    <div class="row">   	
	    	<input type="text" class="form-control p-2 m-2" name="anh" required>
	    </div>
	    <div class="row">   		
	    	<label>ten:</label>
	    </div>
	    <div class="row">   	
	    	<input type="text" class="form-control p-2 m-2" name="ten" required>
	    </div>
	   
	     <div class="row">   		
	    	<label>Ca si:</label>
	    </div>
		<div class="row">
	    	<select class="form-control p-2 m-2" name="casi_id">
	    		 <?php foreach ( $list_casi as $key => $value) { 
					 $arr = (array) $value;?>
 					<option value="<?php print_r($arr['id']); ?> "> <?php print_r($arr['ten']) ; }?></option>
	    	</select>
	    </div>
	     <div class="row">   		
	    	<label>theloai:</label>
	    </div>
		<div class="row">
	    	<select class="form-control p-2 m-2" name="casi_id">
	    		 <?php foreach ( $list_theloai as $key => $value) { 
					 $arr = (array) $value;?>
 					<option value="<?php print_r($arr['id']); ?> "> <?php print_r($arr['ten']) ; }?></option>
	    	</select>
	    </div>
	    <div class="row">   
	    	<button class="btn btn-primary p-2 m-2" type="submit">Apply</button>
	    </div>
	    </form>
	</div>
</div>
<?php require_once(PATH_PUBLIC . '/template/admin/footer.php'); ?>