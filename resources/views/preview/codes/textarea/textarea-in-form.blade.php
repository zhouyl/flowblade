<form class="space-y-4">
    <div>
        <x-label for="subject">Subject</x-label>
        <x-input id="subject" placeholder="Enter subject" />
    </div>
    <div>
        <x-label for="message">Message</x-label>
        <x-textarea id="message" placeholder="Enter your message..." rows="5" />
    </div>
    <x-button type="submit">Send Message</x-button>
</form>

