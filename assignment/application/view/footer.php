<footer id="footer" class="text-muted bg-light footer navbar-fixed-bottom mt-auto py-3">
        <nav class="navbar navbar-expand-sm footer">
            <div class="container">
                <div class="navbar-text float-left copyright">
                    <span>© Mobile Web 3D Applications</span>
                </div>

                <div class="navbar-text float-right social">
                    <a href="#">
                        <i class="fab fa-facebook-square fa-3x text-primary"></i>
                    </a>
                    <a href="#">
                        <i class="fab fa-twitter-square fa-3x text-info"></i>
                    </a>
                    <a href="">
                        <i class="fab fa-google-plus-square fa-3x text-danger"></i>
                    </a>
                    <a href="https://github.com/oy3/3dapp">
                        <i class="fab fa-github-square fa-3x text-secondary"></i>
                    </a>
                </div>

            </div>
        </nav>
    </footer>

    <a href="javascript:changeLook()"
        class="text-white text-decoration-none d-flex justify-content-center align-items-center float"
        style="bottom: 100px;">
        <i class="fa fa-palette fa-lg"></i>
    </a>
    <a href="javascript:changeBack()"
        class="text-white text-decoration-none d-flex justify-content-center align-items-center float bg-secondary">
        <i class="fa fa-ban fa-lg"></i>
    </a>

    <!-- Contact Modal -->
    <div class="modal fade" id="contactModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="contactModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Contact details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Temitope Oyeyinka, BN1 9BJ
                    <br>Email: to277@sussex.ac.uk
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <form action="mailto:to277@sussex.ac.uk" method="post" enctype="text/plain">
                        <input type="submit" value="Contact Email" class="btn btn-primary">
                    </form>

                </div>
            </div>
        </div>
    </div>

    <script src="./js/jquery.js"></script>
    <script src="./js/popper.min.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/gallery_generator.js"></script>
    <script src="./assets/fancybox/fancybox.js"></script>
    <script src="./js/getJsonData.js"></script>
    <script src="./js/func.js"></script>
    <script src="./js/x3dom.js"></script>
    <script src="./js/modelInteractions.js"></script>
    <script src="./js/swap_restyle.js"></script>

    <script>
        // get the tab links
        var cokeTab = document.getElementById('coke-tab');
        var spriteTab = document.getElementById('sprite-tab');
        var pepperTab = document.getElementById('pepper-tab');

        // get the target divs
        var cokeDesc = document.getElementById('coke-desc');
        var spriteDesc = document.getElementById('sprite-desc');
        var pepperDesc = document.getElementById('pepper-desc');

        // add event listeners to the tab links
        cokeTab.addEventListener('shown.bs.tab', function (event) {
            // hide the other divs
            spriteDesc.style.display = 'none';
            pepperDesc.style.display = 'none';
            // show the corresponding div
            cokeDesc.style.display = 'block';
        });

        spriteTab.addEventListener('shown.bs.tab', function (event) {
            // hide the other divs
            cokeDesc.style.display = 'none';
            pepperDesc.style.display = 'none';
            // show the corresponding div
            spriteDesc.style.display = 'block';
        });

        pepperTab.addEventListener('shown.bs.tab', function (event) {
            // hide the other divs
            cokeDesc.style.display = 'none';
            spriteDesc.style.display = 'none';
            // show the corresponding div
            pepperDesc.style.display = 'block';
        });
    </script>
</body>

</html>