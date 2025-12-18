import { Component, signal } from '@angular/core';

@Component({
  selector: 'app-home',
  imports: [],
  templateUrl: './home.html',
  styleUrl: './home.css',
})
export class Home {

    tasks = signal<string[]>([
        'Tarea 1',
        'Tarea 2',
        'Tarea 3',
        'Tarea 4',
        'Tarea 5',
    ]);

    addTask(event: Event) {
        const inputElement = event.target as HTMLInputElement;
        const newTask = inputElement.value.trim();

        if (this.tasks().includes(newTask)) return;

        if (newTask) {
            this.tasks.update(currentTasks => [...currentTasks, newTask]);
            inputElement.value = '';
        }
    }

    removeTask(index: number) {
        this.tasks.update(currentTasks =>
            currentTasks.filter((_, i) => i !== index)
        );
    }

}
