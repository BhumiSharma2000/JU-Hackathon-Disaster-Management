<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
     <?php
    include("header.php");
  ?>
    <!-- End Head -->

    <!-- Body -->
    <body>

        <!--========== END HEADER ==========-->

        <!--========== PROMO BLOCK ==========-->
        <div class="g-fullheight--xs js__parallax-window" style="background: url(img/1920x1080/check.jpg) 50% 0 no-repeat fixed; background-size: cover;">
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- About -->
        <!--Earthquake-->
        <div id="js__scroll-to-section" class="container g-padding-y-80--xs g-padding-y-125--sm g-margin-b-25--xs">
            <div class="row g-hor-centered-row--md">
                <table width="100%" height="80px" bgcolor=" #ff6319"><tr>
                    <form action="checklist2.php" method="POST">
                        <input type="text" name="add" value=""/><br/><br/>
                            <h2>Essential </h2>
                            <input type="checkbox" name="part[]" value="Drinking Water">Drinking Water<br/>
                            <input type="checkbox" name="part[]" value="Water purification tablets">Water purification tablets<br/>
                            <input type="checkbox" name="part[]" value="food">Food<br/>
                            <input type="checkbox" name="part[]" value="Emergency blanket">Emergency blanket<br/>
                            <input type="checkbox" name="part[]" value="Prescribed medicines">Prescribed medicines<br/>
                            <input type="checkbox" name="part[]" value="ID">ID<br/>
                            <input type="checkbox" name="part[]" value="Family contacts">Family contacts<br/><br/>
                            <h2>PROTECTION</h2>
                            <input type="checkbox" name="part2[]" value="Rain poncho">Rain poncho<br/>
                            <input type="checkbox" name="part2[]" value="Gloves">Gloves<br/>
                            <input type="checkbox" name="part2[]" value="Dust mask">Dust mask<br/><br/>
                            <h2>LIGHTING-COMUNICATION</h2>
                            <input type="checkbox" name="part4[]" value="Radio">Radio<br/>
                            <input type="checkbox" name="part4[]" value="Flashlight">Flashlight<br/>
                            <input type="checkbox" name="part4[]" value="Mobile phone charging cable">Mobile phone charging cable<br/>
                            <input type="checkbox" name="part4[]" value="Batteries">Batteries<br/>
                            <input type="checkbox" name="part4[]" value="Solar battery recharger">Solar battery recharger<br/>
                            <input type="checkbox" name="part4[]" value="Whistle">Whistle<br/>
                            <input type="checkbox" name="part4[]" value="Light stick">Light stick<br/>
                            <input type="checkbox" name="part4[]" value="Flare">Flare<br/><br/>
                            <h2>HYGIENE</h2>
                            <input type="checkbox" name="part5[]" value="Plastic bags">Plastic bags<br/>
                            <input type="checkbox" name="part5[]" value="Toilet paper/Wipes">Toilet paper/Wipes<br/>
                            <input type="checkbox" name="part5[]" value="Hand sanitizer">Hand sanitizer<br/>
                            <input type="checkbox" name="part5[]" value="Dental cleansing/Lotion">Dental cleansing/Lotion<br/>
                            <input type="checkbox" name="part5[]" value="Sanitary napkins">Sanitary napkins<br/><br/>
                            <h2>FIRST AID</h2>
                            <input type="checkbox" name="part6[]" value="Disinfecting wipes">Disinfecting wipes<br/>
                            <input type="checkbox" name="part6[]" value="Sanitary Gloves">Sanitary Gloves<br/>
                            <input type="checkbox" name="part6[]" value="Antibiotic ointment">Antibiotic ointment<br/>
                            <input type="checkbox" name="part6[]" value="Tweezers">Tweezers<br/>
                            <input type="checkbox" name="part6[]" value="Dressing /Bandages">Dressing /Bandages<br/>
                            <input type="checkbox" name="part6[]" value="Pain reliver(Fever reducer)">Pain reliver(Fever reducer)<br/>
                            <input type="checkbox" name="part6[]" value="Anti-diarheal">Anti-diarheal<br/>
                            <input type="checkbox" name="part6[]" value="Aloe gel">Aloe gel<br/>
                            <input type="checkbox" name="part6[]" value="Petroleum jelly">Petroleum jelly<br/>
                            <input type="checkbox" name="part6[]" value="Eyewash ">Eyewash<br/>
                            <input type="checkbox" name="part6[]" value="Coldpack">Coldpack<br/><br/>
                        <input type="submit" name="submit" value="submit"/>
                  
                    </form>
    </table>
    </div>
    </div>
    </body>
    <!-- End Body -->
    <?php
    include("footer.php");
  ?>
</html>
