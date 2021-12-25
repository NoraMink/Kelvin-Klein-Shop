<?php
include("header.php")
?>
<div class="container">
    <h2></h2>
    <br>
    <ul class="nav nav-pills">
        <li><a href="shopping.php"><font size="4" color="White" face="century gothic">Shopping</font></br></a></li>
        <li class="active"><a rel="nofollow" href="cart.php"><font size="4" color="White" face="century gothic">Корзина</font></br><span id="total-cart-count" class="badge"></span></a></li>
    </ul>
    <br>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <br><font size="3" color="White" face="century gothic">Артикул</font></br>
                    <br><font size="3" color="White" face="century gothic">Название</font></br>
                    <br><font size="3" color="White" face="century gothic">Цена</font></br>
                    <br><font size="3" color="White" face="century gothic">Количество</font></br>
                    <br><font size="3" color="White" face="century gothic">Сумма</font></br>
                    <br></br>
                </tr>
            </thead>
            <tbody id="cart">
                <tr><td colspan="6"><img src="img/loading.gif" alt=""></td></tr>
            </tbody>
        </table>
    </div>
    <div><font size="3" color="White" face="century gothic">Итого:</font></br> <span id="total-cart-summa"><font size="3" color="White" face="century gothic">0</font></br></span> <font size="3" color="White" face="century gothic">руб.</font></br></div>
    <br>
    <button id="order" class="btn btn-info"><font size="3" color="Black" face="century gothic">Оформить заказ</font></br></button>
</div>
<html>
 
 <body bgcolor="#000000" text="#fff">
 </body>
<?php
include("footer.php")
?>