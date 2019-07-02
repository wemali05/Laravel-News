@component('mail::message')
#introduction
    {{ $project->title }}

    {{ $project->description }}

The body of your message.

@component('mail::button', ['url' =>url('/projects/'. $project->id) ])
View $project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
