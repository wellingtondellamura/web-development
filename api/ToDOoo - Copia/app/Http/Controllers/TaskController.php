<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $task = Task::create($data);
        if (isset($task)){
            $response = [
                "success"=> true,
                "message" => "Tarefa Cadastrada com Sucesso",
                "data" => $task
            ];
        } else {
            $response = [
                "success"=> false,
                "message" => "Erro ao cadastrar a Tarefa",
                "data" => ""
            ];
        }
        return response()->json($response);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        if (isset($task)){
            $response = [
                "success"=> true,
                "message" => "",
                "data" => $task
            ];
        } else {
            $response = [
                "success"=> false,
                "message" => "Tarefa Não Encontrada",
                "data" => ""
            ];
        }
        return response()->json($response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        dd($task);
    }
}
