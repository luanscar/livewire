<div>
    @foreach($tweets as $tweet)
        <x-feed.tweet.box :tweet="$tweet" />
    @endforeach
</div>


