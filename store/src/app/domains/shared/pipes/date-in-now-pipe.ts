import { Pipe, PipeTransform } from '@angular/core';
import { formatDistanceToNow } from 'date-fns';
import { es } from 'date-fns/locale';

@Pipe({
  name: 'dateInNow',
})
export class DateInNowPipe implements PipeTransform {

  transform(value: Date): string {
    return formatDistanceToNow(value, { addSuffix: true, locale: es });
  }

}
