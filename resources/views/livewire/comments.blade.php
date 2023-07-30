<div class="row">
    <!-- Empty Column for Gap -->
    <div class="col-md-3"></div>
    
    <!-- Main Content Column -->
    <div class="col-md-6 p-5">
        <!-- Content goes here -->
        <h1>Comments</h1>

        <br>

        <form class="input-group mb-3" wire:submit.prevent="add_comment">            
            <input type="text" class="form-control" placeholder="What's on your mind?" aria-label="Recipient's username" aria-describedby="button-addon2" wire:model.lazy="newComment">
            <button type="submit" class="btn btn-info" type="button" id="button-addon2">Submit</button>
        </form>

        <br>
        <!-- Commnet Box -->

        @foreach($comments as $comment)

        <div class="card">
            <div class="card-header">
                {{$comment['created_at']}}
            </div>
            <div class="card-body">
                <blockquote class="blockquote mb-0">
                <p>{{$comment['body']}}</p>
                <footer class="blockquote-footer">{{$comment['creator']}}</footer>
                </blockquote>
            </div>
        </div>

        <br>

        @endforeach
    </div>
    
    <!-- Empty Column for Gap -->
    <div class="col-md-3"></div>
</div>
