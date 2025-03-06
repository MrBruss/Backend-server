<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASTER CARDS </title>

    <link rel="stylesheet" href="/Public/css/Cards.css">


  
 </head>
  <body>
  <?php include("../header.php"); ?>  <!-- If the page is inside a folder -->
  

    <a href="/Public/Payment Gateway/Paymentpage.html"> <button class="desktop-addfund"> Add Funds</button> </a>
     

    <a href="#"><button class="Balance"> $ 000.00 </button></a>
    
  
    <nav class="navbar">
    
  
      <h1 class="logo">Swipers<span>Web</span></h1>
    
      <ul>
        <li><a href="/Public/index.html"><i class="fa fa-home" aria-hidden="true"></i> DashBoard </a></li>
  
        <li><a href="#"><i class="fa fa-credit-card"></i> Cards <i class="fas fa-caret-down"></i></a>
  
          <div class="dropdown_menu">
              <ul>
                  
                  <li><a href="/Public/Cards/Mastercard.php">Master Cards</a></li>
                  <li><a href="/Public/Cards/visa.php"> Visa Cards</a></li>
                  <li><a href="/Public/Cards/Amex.php">Amex Cards</a></li>
                  <li><a href="/Public/Cards/Discover.php">Discover Cards</a></li>
              </ul>
  
        <li><a href="#"><i class="fa fa-university" aria-hidden="true"></i> Bank Logs <i class="fas fa-caret-down"></i></a>
  
          <div class="dropdown_menu">
              <ul>
                  <li><a href="/Public/Bank LOGs/chase.php">Chase Banks</a></li>
                  <li><a href="/Public/Bank LOGs/Boa.php">BOA Banks</a></li>
                  <li><a href="/Public/Bank LOGs/Citi.php">Citi Banks</a></li>
                  <li><a href="/Public/Bank LOGs/wellsfargo.php">Wells Fargo Banks</a></li>
                  <li><a href="/Public/Bank LOGs/TD.php">TD Banks</a></li>
                  <li><a href="/Public/Bank LOGs/Huntington.php">Huntington Banks</a></li>
                  <li><a href="/Public/Bank LOGs/Chime.php">Chime Banks</a></li>
                  <li><a href="/Public/Bank LOGs/Suntrust.php">Suntrust Banks</a></li>
                  <li class="hover-me"><a href="#">Canadian Bank Log <i class="fas fa-angle-right"></i></a>
                    <div class="dropdown_menu-1">
               <ul>
                <li><a href="/Public/Bank LOGs/Scotia.php">Scotia Banks</a></li>
                <li><a href="/Public/Bank LOGs/RBC.php">RBC Banks</a></li>
                <li><a href="/Public/Bank LOGs/TDCanada.php">TD Banks</a></li>
                <li><a href="/Public/Bank LOGs/BMO.php">BMO Banks</a></li>
              </ul>
                  </li>
                  <li class="hover-me"><a href="#">UK Bank Logs <i class="fas fa-angle-right"></i></a>
                    <div class="dropdown_menu-1">
                      <ul>
                       <li><a href="/Public/Bank LOGs/Lollyds.php">Lollyds Banks</a></li>
                       <li><a href="/Public/Bank LOGs/Hsbc.php">Hsbc UK Banks</a></li>
                       <li><a href="/Public/Bank LOGs/Halifax.php">Halifax Banks</a></li>
                       <li><a href="/Public/Bank LOGs/Barclays.php">Barclays Banks</a></li>
                     </ul>
                  </li>
              </ul>
    
  
        <li><a href="#"><i class="fa fa-file" aria-hidden="true"></i> Scam Pages <i class="fas fa-caret-down"></i></a>
  
          <div class="dropdown_menu">
              <ul>
                  <li><a href="/Public/Scam Page/Bank ScamPage.php">Bank Scampages</a></li>
                  <li><a href="/Public/Scam Page/Emailscampage.php">Email Scampages</a></li>
                  
              </ul>
  
        <li><a href="/Public/Mobile Logs/MobileLogs.php"><i class="fa fa-address-book" aria-hidden="true"></i> MOBILE LOGs <i class="fas fa-caret-down"></i></a>
  
          
  
        <li><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> FULLZ <i class="fas fa-caret-down"></i></a>
  
          <div class="dropdown_menu">
              <ul>
                  <li><a href="/Public/Fullz/USAFullz.php">USA Fullz</a></li>
                  <li><a href="/Public/Fullz/UKfullz.php">UK Fullz</a></li>
                  <li><a href="/Public/Fullz/CanadaFullz.php">Canda Fullz</a></li>
                  <li><a href="/Public/Fullz/EuropeFullz.php"> Europe Fullz</a></li>
              </ul>
        <li>
          <a href="#"><i class="fa fa-address-card" aria-hidden="true"></i> DUMPS <i class="fas fa-caret-down"></i></a>
  
          <div class="dropdown_menu">
              <ul>
                  <li><a href="/Public/Dumps/USADumps.php">USA Dumps</a></li>
                  <li><a href="/Public/Dumps/UKDumps.php">UK Dumps</a></li>
                  <li><a href="/Public/Dumps/CanadaDumps.php"> Canada Dumps</a></li>
                  <li><a href="/Public/Dumps/EuropeDumps.php"> Europe Dumps </a></li>
              </ul>
  
      </li>
    </ul>
    </div>
    </nav>
  
    <div class="table_responsive">
        <table>
            <thead>
                <tr>
                    <th>Card Number</th>
                    <th>Type</th>
                    <th>Name</th>
                    <th>State</th>
                    <th>Infos</th>
                    <th>Country</th>
                    <th>Class</th>
                    <th>Balance</th>
                    <th>Bank</th>
                    <th>Price</th>
                    <th>Status</th>
                    <th>Buy</th>
                

                </tr>

            </thead>

            <tbody>
                <tr>
                    <td>5328 39xx xxxx xx16</td>
                    <td>
                        <img src="/Public/img/Mastercard.png" alt="">
                    </td>
                    <td> Ernesto ***** </td> 
                    <td> Houston </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/USA.png"  alt=""> 
                    </td>
                    <td> Credit Card </td> 
                    <td> $4,210.19 </td>
                    <td> CAPITAL ONE N.A. </td>
                    <td> $195 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>5209 43xx xxxx xx43 </td>
                    <td>
                        <img src="/Public/img/Mastercard.png" alt="">
                    </td>
                    <td> Ricardo ***** </td> 
                    <td> NV </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/UK.png" alt="">
                    </td>
                    <td> Debit Card </td> 
                    <td> $5,104.09 </td>
                    <td> TRANSACT PAYMENT LTD. </td>
                    <td> $220 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>5579 62XX XXXX XX60</td>
                    <td>
                        <img src="/Public/img/Mastercard.png" alt="">
                    </td>
                    <td> Scott***** </td> 
                    <td> ON </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/Canada logo.jpg" alt="">
                    </td>
                    <td> Credit Card </td>
                    <td> $7,130.25 </td> 
                    <td> ROGERS BANK </td>
                    <td> $350 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>5121 11xx xxxx xx58</td>
                    <td>
                        <img src="/Public/img/Mastercard.png" alt="">
                    </td>
                    <td> Abdula ***** </td> 
                    <td> Oslo </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/Germany.png" alt="">
                    </td>
                    <td> Credit Card </td> 
                    <td> $2,209.27 </td>
                    <td>TF BANK AB </td>
                    <td> $125 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>5143 77XX XXXX XX45</td>
                    <td>
                        <img src="/Public/img/Mastercard.png" alt="">
                    </td>
                    <td> Jennifer ***** </td> 
                    <td> OH </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Debit Card </td> 
                    <td> $ 11,003.00 </td>
                    <td> BANKCROP BANK THE </td>
                    <td> $400 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>5239 57xx xxxx xx55</td>
                    <td>
                        <img src="/Public/img/Mastercard.png" alt="">
                    </td>
                    <td> Nick ***** </td> 
                    <td> SC </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                       <P> Phone Number, Online Access, CVV, SNN  </P> 
                    </td>
                    <td> 
                        <img src="/Public/img/Germany.png" alt="">
                    </td>
                    <td> Credit Card </td> 
                    <td> $5,533.00 </td>
                    <td>  </td>
                    <td> $250 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>5498 25xx xxxx xx07</td>
                    <td>
                        <img src="/Public/img/Mastercard.png" alt="">
                    </td>
                    <td> Ebony ***** </td> 
                    <td> Wa </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/Canada logo.jpg" alt="">
                    </td>
                    <td> Credit Card </td> 
                    <td> $4,103.06 </td>
                    <td> </td>
                    <td> $175 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>5209 43xx xxxx xx59</td>
                    <td>
                        <img src="/Public/img/Mastercard.png" alt="">
                    </td>
                    <td> Judith ***** </td> 
                    <td> AR</td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/UK.png" alt="">
                    </td>
                    <td> Debit Card </td> 
                    <td> $ 3,117.00 </td>
                    <td> TRANSACT PAYMENTS LTD. </td>
                    <td> $150 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td> 5156 76xx xxxx xx95</td>
                    <td>
                        <img src="/Public/img/Mastercard.png" alt="">
                    </td>
                    <td> Lily ***** </td> 
                    <td> Pennsylvanian </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Creidt Card </td> 
                    <td> $ 3,558.00 </td>
                    <td> CAPITAL ONE BANK USA N.A. </td>
                    <td> $165 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>5156 76xx xxxx xx46</td>
                    <td>
                        <img src="/Public/img/Mastercard.png" alt="">
                    </td>
                    <td> Stanley ***** </td> 
                    <td> Pa </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Credit Card </td> 
                    <td> $5,600.21 </td>
                    <td> CAPITAL ONE BANK USA N.A. </td>
                    <td> $250 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>5573 49xx xxxx xx33</td>
                    <td>
                        <img src="/Public/img/Mastercard.png" alt="">
                    </td>
                    <td> David ***** </td> 
                    <td> East of Riding Yorkshire </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/UK.png" alt="">
                    </td>
                    <td> Debit Card </td> 
                    <td> $4,655.00 </td>
                    <td> CLYDESDALE BANK PLC </td>
                    <td> $200 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

            </tbody>

        </table>

    </div>

    <footer class="footer">
        <div class="footer-bottom">
            <p>&copy; 2024 &nbsp; SwipersWeb.com &nbsp; |&nbsp; All Rights Reserved.</p>
        </div>
       </footer>
    
</body>
</html>