<x-mail::message>
    # A new Quote from: {{$name}} ({{$email}})

    {{$message}}

    Thanks,
    {{ config('app.name') }}
</x-mail::message>
