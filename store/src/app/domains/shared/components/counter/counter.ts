import { CommonModule } from '@angular/common';
import { Component, Input, SimpleChanges } from '@angular/core';


@Component({
  selector: 'app-counter',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './counter.html',
  styleUrl: './counter.css',
})
export class Counter {

  @Input({required: true}) count: number = 0;
  @Input({required: true}) message: string = '';

  constructor() {
    console.log('Counter component created');
    console.log('-'.repeat(10));
  }

  ngOnChanges(changes: SimpleChanges): void {
    console.log('Counter component - ngOnChanges', this.count);
    console.log('-'.repeat(10));
    console.log(changes);
  }

  ngOnInit(): void {
    console.log('Counter component - ngOnInit');
    console.log('-'.repeat(10));
  }

  ngAferViewInit(): void {
    console.log('Counter component - ngAfterViewInit');
    console.log('-'.repeat(10));
  }

  ngOnDestroy(): void {
    console.log('Counter component - ngOnDestroy');
    console.log('-'.repeat(10));
  }

}
