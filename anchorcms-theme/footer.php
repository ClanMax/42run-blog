<footer class="footer">
    <div class="subscribe">
        <h4 class="subscibe_h4">У нас для вас всегда хорошие<sup>*</sup> новости</h4>
        <form action="">
            <input type="email" class="aboutus_email" name="email" id="email" placeholder="youemail@mail.com">
            <input type="submit" class="btn_submit" value="Подписаться" disabled>
        </form>
        
    </div>
    <div class="about">
       <p class="about_p litte_font">На самом деле долго не могли придумать как оформить эту страницу. В итоге решили, что пора бы завести блог. И если вы это читаете - значит что-то получилось.</p>
       <p class="about_p litte_font">Ах да, на счет звездочки - то от нас не будет спама. Только крутые сообщения о мероприятиях.</p>
    </div> 
    
    <ul class="footer_block">
        <li><a href="<?php echo base_url(); ?>">Главная</a></li>
        <li><a href="http://vk.com/42run">Вконтакте</a></li>
        <li><a href="https://www.instagram.com/oleg.42run.ru/">Инстаграм</a></li>
        <li><a href="<?php echo rss_url(); ?>">RSS</a></li>
    </ul>
</footer>   
    
</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="js/responsiveslides.min.js"></script>
<script>
  $(function() {
    $(".rslides").responsiveSlides();
  });
</script>
</html>