<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = auth()->user()->tasks;
        return TaskResource::collection($tasks);
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(TaskRequest $request)
    {
        $task = auth()->user()->tasks()->create($request->validated());
        return response()->json([
            'message' => 'Task created successfully.',
            'data' => new TaskResource($task),
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $this->authorizeTask($task);
        return new TaskResource($task);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(TaskRequest $request, Task $task)
    {
        $this->authorizeTask($task);
        $task->update($request->validated());
        return response()->json([
            'message' => 'Task updated successfully.',
            'data' => new TaskResource($task),
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
     public function destroy(Task $task)
    {
        $this->authorizeTask($task);
        $task->delete();
        return response()->json(['message' => 'Task deleted']);
    }

    /**
     * Check  specified task from auth user.
     */
    protected function authorizeTask(Task $task)
    {
        if ($task->user_id !== auth()->id()) {
            abort(403, 'Unauthorized');
        }
    }
}
