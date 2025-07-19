</main>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="<?= asset('public/admin-panel/js/bootstrap.min.js') ?>"></script>
<script src="<?= asset('public/admin-panel/js/mdb.min.js') ?>""></script>
<script src=" <?= asset('public/ckeditor/ckeditor.js') ?>""></script>
<script src=" <?= asset('public/jalalidatepicker/persian-date.min.js') ?>"></script>
<script src=" <?= asset('public/jalalidatepicker/persian-datepicker.min.js') ?>"></script>

<script>
    $(document).ready(function() {
        CKEDITOR.replace('summary');
        CKEDITOR.replace('body');

        $("#published_at_view").persianDatepicker({

            format: 'YYYY-MM-DD HH:mm:ss',
            toolbox: {
                calendarSwitch: {
                    enabled: true
                }
            },
            observer: true,
            altfield: '#published_at'
        })
    })
</script>

</body>

</html>