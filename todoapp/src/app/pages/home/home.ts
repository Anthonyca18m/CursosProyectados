import { Component, signal } from '@angular/core';

import { Task } from '../../models/task.model';

@Component({
  selector: 'app-home',
  imports: [],
  templateUrl: './home.html',
  styleUrl: './home.css',
})
export class Home {

    tasks = signal<Task[]>([]);

    addTask(event: Event) {
        const inputElement = event.target as HTMLInputElement;
        const newTitleTask = inputElement.value.trim();

        if (this.tasks().some(task => task.title === newTitleTask)) return;

        if (newTitleTask) {

            const newTask: Task = {
                id: Date.now(),
                title: newTitleTask,
                completed: false
            };

            this.tasks.update(currentTasks => [
                ...currentTasks, newTask
            ]);
            inputElement.value = '';
        }
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
