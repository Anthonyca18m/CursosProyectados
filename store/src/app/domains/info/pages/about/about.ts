import { CommonModule } from '@angular/common';
import { Component, signal } from '@angular/core';
import { Counter as CounterComponent } from '../../../shared/components/counter/counter';

@Component({
  selector: 'app-about',
  standalone: true,
  imports: [
    CommonModule,
    CounterComponent
  ],
  templateUrl: './about.html',
  styleUrl: './about.css',
})
export class About {

  duration = signal<number>(120);
  message = signal<string>('This is the about page counter');

  onChangeDuration(event: Event) {
    const inputElement = event.target as HTMLInputElement;
    const newDuration = Number(inputElement.value);
    this.duration.set(newDuration);
  }

  onChangeMessage(event: Event) {
    const inputElement = event.target as HTMLInputElement;
    const newMessage = inputElement.value;
    this.message.set(newMessage);
  }

}
