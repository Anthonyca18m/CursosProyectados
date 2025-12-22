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

    tasks = signal<Task[]>([]);

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
            completed: false
        };

        this.tasks.update(currentTasks => [
            ...currentTasks, newTask
        ]);
        this.newTaskCtrl.reset();
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
