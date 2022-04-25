<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
   <title>Product details - Paper Street</title>
   <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
   <link rel="stylesheet" href="../css/cssfyp.css">
   <link rel="stylesheet" href="../css/add.css">
   <link rel="shortcut icon" href="../images/favicon/duck.ico"/>
</head>
<body>

   <input type="checkbox" id="nav-toggle">
   <div class="sidebar">
       <div class="sidebar-brand">
           <h2><span class="las la-user-circle"></span> <span>Paper Street</span></h2>
       </div>
       <?php include("sidebar-product.php"); ?>

   </div>
   <div class="main-content">
       <header>
           <h2>
               <label for="nav-toggle">
                   <span class="las la-bars"></span>
               </label>

               Dashboard
           </h2>
       </header>
       <main>
         <?php include("card-header-product.php"); ?>


<div class="title-acc">
    <h1 style="text-align: center; font-size: 40px;"> Product Details </h1>
</div>

<div class="accountDetails">
   <div class="acc-detail">
       <form action="insertproduct.php" method="post">
           <div class="user-details">
             <!-- <div class="input-box">
                 <span class="details">ID</span>
                 <input type="text"  name="product_id" required >
             </div> -->
               <div class="input-box">
                   <span class="details">Product Name</span>
                   <input type="text"  name="product_name" required >
               </div>
               <div class="input-box">
                    <span class="details">Description</span>
                     <input type="type"  name="description"  >
             </div>
             <div class="input-box">
                  <span class="details">Category</span>
                   <input type="type"  name="category"  >
           </div>
               <div class="input-box">
                   <span class="details">Price</span>
                   <input type="text"  name="price"  required >
               </div>
                <div class="input-box">
                      <span class="details">Product image</span>
                     <input type="file" name="image" multiple/>
               </div>
           </div>

           <div class="bttn">
               <input type="submit" name="submit" value="ADD NEW PRODUCT"/>
           </div>

       </form>
   </div>
       </div>
       </main>
</div>


</body>
</html>
