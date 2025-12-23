import { Component, signal } from '@angular/core';

import { Task } from '../../models/task.model';
import { CommonModule } from '@angular/common';
import { FormControl, ReactiveFormsModule, Validators } from '@angular/forms';

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule],
  templateUrl: './home.html',
  styleUrls: ['./home.css'],
})
export class Home {

    tasks = signal<Task[]>([
        { id: 1, title: 'Buy groceries', completed: false, editing: false },
        { id: 2, title: 'Walk the dog', completed: true, editing: false },
        { id: 3, title: 'Read a book', completed: false, editing: false }
    ]);

    newTaskCtrl = new FormControl('', {
        nonNullable: true,
        validators: [
            Validators.required,
            Validators.minLength(2),
            Validators.maxLength(50),
        ]
    });

    addTask(event: Event) {
        if (!this.newTaskCtrl.valid) return;
        if (this.tasks().some(task => task.title === this.newTaskCtrl.value?.trim())) return;

        const newTask: Task = {
            id: Date.now(),
            title: this.newTaskCtrl.value!.trim(),
            completed: false,
            editing: false
        };

        this.tasks.update(currentTasks => [
            ...currentTasks, newTask
        ]);
        this.newTaskCtrl.reset();
    }

    editingActive(index: number) {
        this.tasks.update(currentTasks =>
            currentTasks.map((task, i) => i === index ? { ...task, editing: true } : { ...task, editing: false })
        );
    }

    saveTask(index: number, event: Event) {
        const inputElement = event.target as HTMLInputElement;
        const updatedTitle = inputElement.value.trim();
        if (updatedTitle.length === 0) return;
        this.tasks.update(currentTasks =>
            currentTasks.map((task, i) =>
                i === index ? { ...task, title: updatedTitle, editing: false } : task
            )
        );
    }

    removeTask(index: number) {
        this.tasks.update(currentTasks =>
            currentTasks.filter((_, i) => i !== index)
        );
    }

    toggleTaskCompletion(index: number) {
        this.tasks.update(currentTasks =>
            currentTasks.map((task, i) =>
                i === index ? { ...task, completed: !task.completed } : task
            )
        );
    }
}
