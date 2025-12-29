import { CategoryModel } from "./category.model";

export interface ProductModel {
  id: number;
  title: string;
  slug: string;
  images: string[];
  description: string;
  price: number;
  category?: CategoryModel;
}
