   
   
<div class="hero-images">
    <img src="assets/Images/chicken.jpg"  alt="Food" class="food-image"/> 
        <aside class="form-fields">
            <h1 class="hero-h1">My Table Reservations</h1>
            <form class="form-wrapper" name="guest"   action="addcomment.php"  method="post">
                <div class="form-group name" >
                    <input class="inputs" type="text" name="name" placeholder="Name" />
                </div>
                <div class="form-group">
                    <input  class="inputs" type="text" name="phone" placeholder="Phone" />
                </div>
                <div class="form-group">
                    <input  class="inputs" type="text" name="email" placeholder="Email" />
                </div>
                <div class="form-group">
                    <textarea class="inputs" name="message" placeholder="Comments" ></textarea>
                </div>
                <input class="btn btn-primary" type="submit"/>
                
            </form>
        </aside>
</div>   

