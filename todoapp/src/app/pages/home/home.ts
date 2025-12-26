import { Component, computed, effect, inject, Injector, signal } from '@angular/core';

import { Task } from '../../models/task.model';
import { CommonModule } from '@angular/common';
import { FormControl, ReactiveFormsModule, Validators } from '@angular/forms';

type Filter = 'all' | 'pending' | 'completed';

@Component({
  selector: 'app-home',
  standalone: true,
  imports: [CommonModule, ReactiveFormsModule],
  templateUrl: './home.html',
  styleUrls: ['./home.css'],
})
export class Home {

    filter = signal<Filter>('all');

    filteredTasks = computed(() => {
        const filter = this.filter();
        const tasks = this.tasks();
        if (filter === 'all') {
            return tasks;
        } else if (filter === 'pending') {
            return tasks.filter(task => !task.completed);
        } else {
            return tasks.filter(task => task.completed);
        }
    });

    setFilter(filter: Filter) {
        this.filter.set(filter);
    }

    clearCompleted() {
        this.tasks.update(currentTasks =>
            currentTasks.filter(task => !task.completed)
        );
    }

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
            completed: false,
            editing: false
        };

        this.tasks.update(currentTasks => [
            ...currentTasks, newTask
        ]);



        this.newTaskCtrl.reset();
    }

    ngOnInit() {
        const storedTasks = localStorage.getItem('tasks');
        if (storedTasks) {
            this.tasks.set(JSON.parse(storedTasks));
        }

        this.trackTasks();
    }

    injector = inject(Injector);

    trackTasks() {
        effect(() => {
            localStorage.setItem('tasks', JSON.stringify(this.tasks()));
        }, { injector: this.injector});
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
