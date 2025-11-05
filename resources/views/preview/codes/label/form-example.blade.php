<form class="space-y-4">
    <div>
        <x-label for="email" required>Email Address</x-label>
        <x-input id="email" type="email" placeholder="you@example.com" />
    </div>
    <div>
        <x-label for="password" required>Password</x-label>
        <x-input id="password" type="password" placeholder="••••••••" />
    </div>
    <label class="flex items-center gap-2">
        <x-checkbox name="remember" />
        <x-label>Remember me</x-label>
    </label>
    <x-button type="submit">Sign In</x-button>
</form>

