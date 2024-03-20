<footer>
    <div class="container">
       <div class="row">
          <div class="col-md-4">
              <div class="full">
                 <div class="logo_footer">
                   <a href="{{ url('/') }}"><img width="210" src="{{ asset('assets/images/newlogomotomart.png') }}" alt="#" /></a>
                 </div>
                 <div class="information_f">

                   <p><strong>ADDRESS:</strong> Caloocan City</p>
                   <p><strong>TELEPHONE:</strong> 09991234567</p>
                   <p><strong>EMAIL:</strong> motomart@gmail.com</p>
                 </div>
              </div>
          </div>
          <div class="col-md-8">
             <div class="row">
             <div class="col-md-7">
                <div class="row">
                <div class="col-md-4">
                <div class="widget_menu">
                   <h3>Menu</h3>
                   <ul>
                      <li><a href="{{ url('/') }}">Home</a></li>
                      <li><a href="/cart">Cart</a></li>
                      <li><a href="/wishlist">Wishlist</a></li>
                   </ul>
                </div>
             </div>

                <div class="col-md-4">
                    <div class="widget_menu">
                    <h3>Account</h3>
                    <ul>
                        <li><a href="/checkout">Checkout</a></li>
                    </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget_menu">
                        <h3>Discussion</h3>
                        <ul>
                            <li><a href="{{ url('/forum') }}" class="hover-zoom">Forum</a></li>
                        </ul>
                    </div>
                 </div>
            </div>
             </div>
             <div class="col-md-4 ml-4">
                <div class="widget_menu">
                   <h3>Become a Seller</h3>
                   <div class="information_f">
                     <p></p>
                   </div>
                   <div class="form_sub">
                      <form>
                         <fieldset>
                            <div class="field">
                               {{-- <input type="email" placeholder="Enter Your Mail" name="email" />
                               <input type="submit" value="Subscribe" /> --}}
                               <a class="btn btn-danger"  wire:click="btnSellerCenter" href="{{ url('sellercenter/products') }}">Seller Center</a>
                            </div>
                         </fieldset>
                      </form>
                   </div>
                </div>
             </div>
             </div>
          </div>
       </div>
    </div>
 </footer>

 <div class="cpy_">
    <p class="mx-auto">© 2024 All Rights Reserved By <a href="#">Motomart.com</a><br>
    </p>
 </div>
