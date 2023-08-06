<div class="px-3 pt-3 w-full hidden md:flex">
    <div class="flex align-top">
        <div class="flex">
            <x-menu.avatar class="w-10 h-10 rounded-full overflow-hidden" />
        </div>
        <div x-data="{ editing: false }" class="w-full">
            <label>
                <textarea wire:model="body" placeholder="What's happening?" @click="editing = true"
                    class="
                        bg-transparent placeholder-gray-500 text-white font-medium
                        text-xl w-full border-none resize-none
                        focus:outline-none focus:ring-0 mt-1
                    "
                    rows="2" cols="50"></textarea>
            </label>

            <div class="flex justify-between" :class="{ 'border-t-[0.625px] border-outline pt-4': editing }">
                <div class="flex items-center space-x-1">
                    <x-feed.tweet.action icon="media" color="twitter" />
                    <x-feed.tweet.action icon="gif" color="twitter" />
                    <x-feed.tweet.action icon="poll" color="twitter" />
                    <x-feed.tweet.action icon="emoji" color="twitter" />
                    <x-feed.tweet.action icon="schedule" color="twitter" />

                </div>

                <x-menu.item sm icon="tweet" title="Tweet" tweet="blue" route="/"
                    svg="fill-white w-8 xl:w-0" />
            </div>
        </div>
    </div>
</div>
