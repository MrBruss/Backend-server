<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISA CARDS </title>

    <link rel="stylesheet" href="/Public/css/Cards.css">
</head>
<body>

<?php include("../header.php"); ?>  <!-- If the page is inside a folder -->

    <a href="/Public/Payment Gateway/Paymentpage.html"><button class="button"> Add Funds</button></a>
     

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
                    <td>4031 63xx xxxx xx64</td>
                    <td>
                        <img src="/Public/img/Visa.jpg" alt="">
                    </td>
                    <td> Erin ***** </td> 
                    <td> Washington </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/USA.png"  alt=""> 
                    </td>
                    <td> Debit Card </td> 
                    <td> $4,210.19 </td>
                    <td> Chase Bank, N.A </td>
                    <td> $175.00 </td>
                    <td><button class="button1"> ACTIVE </button></td> 
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>4985 03xx xxxx xx88 </td>
                    <td>
                        <img src="/Public/img/Visa.jpg" alt="">
                    </td>
                    <td> Adriana ***** </td> 
                    <td> North Carolina </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/Canada logo.jpg" alt="">
                    </td>
                    <td> Debit Card </td> 
                    <td> $5,014.00 </td>
                    <td> Banco Interamericano
                        <p> De Finanzas S.A.E.M.A </p>
                         </td>
                    <td> $220 </td>
                    <td><button class="button1"> ACTIVE </button></td> 
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>4032 16XX XXXX XX52</td>
                    <td>
                        <img src="/Public/img/Visa.jpg" alt="">
                    </td>
                    <td> Joshua***** </td> 
                    <td> Florida </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Credit Card </td>
                    <td> $6,830.00 </td> 
                    <td> NAVY F.C.U. </td>
                    <td> $330 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>4366 18xx xxxx xx14</td>
                    <td>
                        <img src="/Public/img/Visa.jpg" alt="">
                    </td>
                    <td> Rosa ***** </td> 
                    <td> Carolina </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Credit Card </td> 
                    <td> $2,007.20 </td>
                    <td> U.S. BANK N.A. </td>
                    <td> $144 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>4985 03XX XXXX XX70</td>
                    <td>
                        <img src="/Public/img/Visa.jpg" alt="">
                    </td>
                    <td> Destiney ***** </td> 
                    <td> LA </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/Canada logo.jpg" alt="">
                    </td>
                    <td> Debit Card </td> 
                    <td> $ 11,155.00 </td>
                    <td> Banco Interamericano
                        <p> De Finanzas S.A.E.M.A </p>
                         </td>
                    <td> $420 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>4152 99xx xxxx xx04</td>
                    <td>
                        <img src="/Public/img/Visa.jpg" alt="">
                    </td>
                    <td> JessicaAlyea ***** </td> 
                    <td> Berlin </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                       <P> Phone Number, Online Access, CVV, SNN  </P> 
                    </td>
                    <td> 
                        <img src="/Public/img/Germany.png" alt="">
                    </td>
                    <td> Credit Card </td> 
                    <td> $5,525.28 </td>
                    <td> HANSEATIC BANK GMBH CO KG </td>
                    <td> $250 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>4282 59xx xxxx xx66</td>
                    <td>
                        <img src="/Public/img/Visa.jpg" alt="">
                    </td>
                    <td> KarstenLinke ***** </td> 
                    <td> Brandenburg </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/Germany.png" alt="">
                    </td>
                    <td> Credit Card </td> 
                    <td> $4,004.09 </td>
                    <td> LANDESBANK BERLIN AG</td>
                    <td> $155 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>4347 69xx xxxx xx10</td>
                    <td>
                        <img src="/Public/img/Visa.jpg" alt="">
                    </td>
                    <td> Patricia ***** </td> 
                    <td> California </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Debit Card </td> 
                    <td> $ 3,117.00 </td>
                    <td> JPMORGAN CHASE BANK N.A. </td>
                    <td> $130 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>4347 69xx xxxx xx10</td>
                    <td>
                        <img src="/Public/img/Visa.jpg" alt="">
                    </td>
                    <td> Patricia ***** </td> 
                    <td> California </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Debit Card </td> 
                    <td> $ 3,117.00 </td>
                    <td> JPMORGAN CHASE BANK N.A. </td>
                    <td> $130 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>4347 69xx xxxx xx10</td>
                    <td>
                        <img src="/Public/img/Visa.jpg" alt="">
                    </td>
                    <td> Patricia ***** </td> 
                    <td> California </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Debit Card </td> 
                    <td> $ 3,117.00 </td>
                    <td> JPMORGAN CHASE BANK N.A. </td>
                    <td> $130 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>4347 69xx xxxx xx10</td>
                    <td>
                        <img src="/Public/img/Visa.jpg" alt="">
                    </td>
                    <td> Patricia ***** </td> 
                    <td> California </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Debit Card </td> 
                    <td> $ 3,117.00 </td>
                    <td> JPMORGAN CHASE BANK N.A. </td>
                    <td> $130 </td> 
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