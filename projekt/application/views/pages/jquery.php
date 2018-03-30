<?=validation_errors()?>
<?=form_open('jquery','id="myform"')?>
<label for="value">Value</label>
<input type="number" name="value" id="value">
<input type="submit" name="submit" value="Dodaj to kurwa"/>
</form>
<script>
$("#myform").submit(function (event) {
    event.preventDefault();
    var form = $(this);

    $.ajax({
        type: 'POST',
        url: form.attr('action'),
        data: form.serialize(),
        success: function (data) {
            alert('udalo sie');
            value.value = ''
        },
        error: function(){ alert('failed')}
    })

})

</script>