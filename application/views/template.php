<!-- header -->
<?php 
$this->load->view('template/header') 
?>
<!-- end header -->

<style>

.tabbable .nav-tabs {
   overflow-x: auto;
   overflow-y:hidden;
   flex-wrap: nowrap;
}
.tabbable .nav-tabs .nav-link {
  white-space: nowrap;
}

    body {
  font-family: sans-serif;
  background-color: #eeeeee;
}

.file-upload {
  background-color: #ffffff;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #6777EF;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #6777EF;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #6777EF;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 2px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
</style>

<!-- layout -->
<?php 
$this->load->view('template/layout') 
?>
<!-- end layout -->

<!-- sidebar -->
<?php 
$this->load->view('template/sidebar') 
?>
<!-- end sidebar -->


<?php 
$this->load->view('template/page_js') 
?>

<!-- Main Content -->
<?php echo $contents; ?>
<!-- End main Content -->
     


<!-- header -->
<?php 
$this->load->view('template/footer') 
?>
<!-- end header -->