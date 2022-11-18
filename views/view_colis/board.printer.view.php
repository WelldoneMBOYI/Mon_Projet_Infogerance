<?php
$titre = "Page des imprimentes";
$entete = "Tableau des imprimentes";
ob_start();
?>
<section>
    <div class="container bg-dark-light mt-5">
        <table class="table table-striped table-hover table-bordered  border-primary table-sm table-light caption-top table-responsive">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
<?php
$content = ob_get_clean();
include "board.template.self.view.php";

?>