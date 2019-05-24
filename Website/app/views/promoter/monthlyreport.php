<?php
    $promoter = $this->currentUser;
    $username = $this->searchResults[0];
    $subscribedCount = $this->searchResults[1];
    $promotionList = $this->searchResults[2];
?>

<?php $this->start('head'); ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<style>

</style>
    <header class="top-area single-page" id="home">
        <div class="top-area-bg-addPromo" data-stellar-background-ratio="0.6"></div>
        <div class="welcome-area">
            <div class="area-bg"></div>
            <div class="container">
                <div class="row flex-v-center">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="welcome-text text-center">
                            <h2>Monthly Report</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div>
    <div class="table-responsive" id= "table">
        <table class="table table-hover " >
            <thead>
                
                    <th>Title</th>
                    <th>Category</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>State</th>
                
            </thead>
            <tbody>
                <tr>
                    <?php
                        foreach ($promotionList as $promo){
                            echo "<tr>";
                            echo "<td>   ".$promo["title"]."</td>";
                            echo "<td>".$promo["category"]."</td>";
                            echo "<td>".$promo["description"]."</td>";
                            echo "<td>".$promo["start_date"]."</td>";
                            echo "<td>".$promo["end_date"]."</td>";
                            echo "<td>".$promo["state"]."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tr>
            </tbody>
        </table>
    </div>
    <form action="<?=PROOT?>promoter/monthlyreport" method="post" target="_blank">
        <input type="submit" value="Download Pdf" name="generatepdf"><br>
    </form>
        <!-- <button type= "button" id = "generatePdf" value="generatePdfAction()">Download pdf</button> -->
    <div>
    <!-- <button type= "button" id = "generatePdf" onclick="generatePdf()">Download pdf</button> -->
    </div>
<?php $this->end();?>







