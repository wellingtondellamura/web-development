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
        $tasks = Task::all();
        return $this->sendData($tasks);
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
            return $this->sendMessage("Tarefa Cadastrada com Sucesso", $task);
        } else {
            return $this->sendError("Erro ao cadastrar a Tarefa");
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $task = Task::find($id);

        if (isset($task)){
            return $this->sendData($task);
        } else {
            return $this->sendError("Tarefa Não Encontrada",404) ;
        }
    }


     /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function done($id)
    {
        $task = Task::find($id);

        if (!isset($task)){
            return $this->sendError("Tarefa Não Encontrada",404) ;
        }
        $task->done = true;
        $success = $task->save();
        if ($success){
            return $this->sendMessage("Tarefa alterada com sucesso");
        } else {
            return $this->sendError("Erro ao alterar a Tarefa") ;
        }

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $task = Task::find($id);

        if (!isset($task)){
            return $this->sendError("Tarefa Não Encontrada",404) ;
        }

        $data = $request->all();
        $success = $task->update($data);

        if ($success){
            return $this->sendMessage("Tarefa alterada com sucesso");
        } else {
            return $this->sendError("Erro ao alterar a Tarefa") ;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);

        if (!isset($task)){
            return $this->sendError("Tarefa Não Encontrada",404) ;
        }

        $success = $task->delete();

        if ($success){
            return $this->sendMessage("Tarefa removida com sucesso");
        } else {
            return $this->sendError("Erro ao remover a Tarefa") ;
        }
    }
}
