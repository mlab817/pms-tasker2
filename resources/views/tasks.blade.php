@foreach($tasks as $task)
    <p>{{ $task->particulars }}</p>
    <p>{{ $task->staff->name }}</p>
    <p>{{ $task->particulars }}</p>
    <p>{{ $task->reference_number }}</p>
    <p>{{ $task->document->name }}</p>
    <p>{{ $task->enduser->name }}</p>
    <p>{{ $task->completed }}</p>
    <p>{{ $task->remarks }}</p>
    <p>{{ $task->adder->name }}</p>
    <p>{{ $task->updater->name }}</p>
    <p>{{ optional($task->deleter)->name }}</p>
@endforeach
