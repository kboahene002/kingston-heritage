<x-mail::message>
# Account Linking Request Received

Hello {{ $recipientName ?? 'there' }},

We have received a request from {{ $requesterName ?? 'a user' }} to link to your account (Account Number: {{ $accountNumber ?? 'N/A' }}).

We will connect with the person you are trying to link account to. You will get a feedback within 24 hours.

If you did not expect this, you can safely ignore this email.

Thanks,
{{ config('app.name') }}
</x-mail::message>
