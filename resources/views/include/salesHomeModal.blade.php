
<script src="https://code.jquery.com/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>

{{--<script>--}}
    {{--$('#exampleModal').on('show', function(e) {--}}
        {{--var link     = e.relatedTarget(),--}}
            {{--modal    = $(this),--}}
            {{--username = link.data("name"),--}}
            {{--email    = link.data("id");--}}

        {{--modal.find("#hey").val(email);--}}
        {{--modal.find("#yo").val(username);--}}
    {{--});--}}

{{--</script>--}}
{{--<script>--}}
{{--$('#exampleModal').on('show.bs.modal', function (event) {--}}
{{--var button = $(event.relatedTarget); // Button that triggered the modal--}}
{{--var name = button.data('name');--}}
    {{--var id = button.data('id');--}}
    {{--var address = button.data('address');--}}
{{--var modal = $(this);--}}
{{--modal.find('.modal-title').text('New message to ' + name+' '+ id+' '+address);--}}
{{--modal.find('.modal-body input').val(name);--}}
{{--})--}}
{{--</script>--}}

