<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('ui.mailTitleRevisor')}}</title>
</head>
<body>
    <h1>{{__('ui.created')}}</h1>
    <h2>{{__('ui.hereIsYourData')}}: </h2>
    <p>{{__('ui.name')}}: </p> <span> {{$user->name}}</span>
    <p>{{__('ui.email')}}: </p> <span> {{$user->email}}</span>
    <p>{{__('ui.becomeRevisor')}} <a href="{{route('makeRevisor', compact('user'))}}">{{__('ui.clickHere')}}</a></p>
</body>
</html>