export type Sizes = 'S' | 'M' | 'L' | 'XL';

export type Product = {
    title: string;
    stock: number;
    size?: Sizes;
}
