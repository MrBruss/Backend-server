<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AMEX CARDS </title>

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
                    <td>3722 71xx xxxx xx90</td>
                    <td>
                        <img src="/Public/img/Amex.png" alt="">
                    </td>
                    <td> Angelo ***** </td> 
                    <td> California </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/USA.png"  alt=""> 
                    </td>
                    <td> Credit Card </td> 
                    <td> $6,330.07 </td>
                    <td> AMERICAN EXPRESS COMPANY</td>
                    <td> $260 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>3733 20xx xxxx xx15 </td>
                    <td>
                        <img src="/Public/img/Amex.png" alt="">
                    </td>
                    <td> Ralph ***** </td> 
                    <td> QC </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/Canada logo.jpg" alt="">
                    </td>
                    <td> Credit Card </td> 
                    <td> $4,008.00 </td>
                    <td>AMEX CANADA GLOBESTAR</td>
                    <td> $140 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>3723 90XX XXXX XX25</td>
                    <td>
                        <img src="/Public/img/Amex.png" alt="">
                    </td>
                    <td> Amercan ***** </td> 
                    <td> IN </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Credit Card </td>
                    <td> $2,710.00 </td> 
                    <td> AMERICAN EXPRESS US CONSUMER </td>
                    <td> $145 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>3722 76xx xxxx xx41</td>
                    <td>
                        <img src="/Public/img/Amex.png" alt="">
                    </td>
                    <td> Kim ***** </td> 
                    <td> Georgia </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P> </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Credit Card </td> 
                    <td> $5,225.50 </td>
                    <td> AMERICAN EXPRESS COMPANY </td>
                    <td> $200 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

               
                <tr>
                    <td>3795 50xx xxxx xx33</td>
                    <td>
                        <img src="/Public/img/Amex.png" alt="">
                    </td>
                    <td> Anthony ***** </td> 
                    <td> Cibao </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Debit Card </td> 
                    <td> $ 3,930.00 </td>
                    <td> AMERICAN EXPRESS US </td>
                    <td> $160 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>3790 05xx xxxx xx17</td>
                    <td>
                        <img src="/Public/img/Amex.png" alt="">
                    </td>
                    <td> Eva ***** </td> 
                    <td> CA </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/UK.png" alt="">
                    </td>
                    <td> Credit Card </td> 
                    <td> $ 9,217.26 </td>
                    <td>  </td>
                    <td> $300 </td> 
                    <td><button class="button1"> ACTIVE </button></td>
                    <td> 
                        <span class="action_btn">
                            <a href="/Public/Forms/emailforms.html"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Buy </a>
                        </span>
                         </td>

                </tr>  

                <tr>
                    <td>3792 84xx xxxx xx08</td>
                    <td>
                        <img src="/Public/img/Amex.png" alt="">
                    </td>
                    <td> American ***** </td> 
                    <td> California </td>
                    <td> Name On Card, Bill Address, Zip code, Email Access,
                        <P> Phone Number, Online Access, CVV, SNN  </P>
                     </td>
                    <td> 
                        <img src="/Public/img/USA.png" alt="">
                    </td>
                    <td> Credit Card </td> 
                    <td> $ 2,007.00 </td>
                    <td> AMERICAN EXPRESS US </td>
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