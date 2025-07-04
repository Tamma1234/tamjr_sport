"use client"

import { useState } from "react"
import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card"
import { Badge } from "@/components/ui/badge"
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from "@/components/ui/table"
import { DropdownMenu, DropdownMenuContent, DropdownMenuItem, DropdownMenuTrigger } from "@/components/ui/dropdown-menu"
import {
  Dialog,
  DialogContent,
  DialogDescription,
  DialogFooter,
  DialogHeader,
  DialogTitle,
  DialogTrigger,
} from "@/components/ui/dialog"
import { Label } from "@/components/ui/label"
import { Textarea } from "@/components/ui/textarea"
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select"
import { Plus, Search, MoreHorizontal, Edit, Trash2, Eye } from "lucide-react"
import type { Product } from "@/lib/types"

// Mock data
const mockProducts: Product[] = [
  {
    id: "1",
    name: "Barcelona Home Jersey 2024",
    description: "Official Barcelona home jersey for the 2024 season",
    price: 89.99,
    stock: 50,
    discount: 0,
    categoryId: "1",
    category: { id: "1", name: "Jerseys", slug: "jerseys", createdAt: "2024-01-01" },
    images: [{ id: "1", url: "/placeholder.svg?height=200&width=200", alt: "Barcelona Jersey", isPrimary: true }],
    status: "active",
    createdAt: "2024-01-01",
  },
  {
    id: "2",
    name: "Real Madrid Away Kit",
    description: "Real Madrid away kit with shorts and socks",
    price: 129.99,
    stock: 25,
    discount: 10,
    categoryId: "2",
    category: { id: "2", name: "Kits", slug: "kits", createdAt: "2024-01-01" },
    images: [{ id: "2", url: "/placeholder.svg?height=200&width=200", alt: "Real Madrid Kit", isPrimary: true }],
    status: "active",
    createdAt: "2024-01-02",
  },
]

export default function ProductsPage() {
  const [products, setProducts] = useState<Product[]>(mockProducts)
  const [searchTerm, setSearchTerm] = useState("")
  const [isDialogOpen, setIsDialogOpen] = useState(false)
  const [editingProduct, setEditingProduct] = useState<Product | null>(null)

  const filteredProducts = products.filter(
    (product) =>
      product.name.toLowerCase().includes(searchTerm.toLowerCase()) ||
      product.description.toLowerCase().includes(searchTerm.toLowerCase()),
  )

  const handleEdit = (product: Product) => {
    setEditingProduct(product)
    setIsDialogOpen(true)
  }

  const handleDelete = (productId: string) => {
    setProducts(products.filter((p) => p.id !== productId))
  }

  const handleSave = () => {
    setIsDialogOpen(false)
    setEditingProduct(null)
    // In a real app, you would save to your backend here
  }

  return (
    <div className="space-y-6">
      <div className="flex justify-between items-center">
        <div>
          <h2 className="text-3xl font-bold tracking-tight">Products</h2>
          <p className="text-muted-foreground">Manage your soccer clothing inventory</p>
        </div>
        <Dialog open={isDialogOpen} onOpenChange={setIsDialogOpen}>
          <DialogTrigger asChild>
            <Button onClick={() => setEditingProduct(null)}>
              <Plus className="h-4 w-4 mr-2" />
              Add Product
            </Button>
          </DialogTrigger>
          <DialogContent className="max-w-2xl">
            <DialogHeader>
              <DialogTitle>{editingProduct ? "Edit Product" : "Add New Product"}</DialogTitle>
              <DialogDescription>
                {editingProduct ? "Update product information" : "Create a new product for your store"}
              </DialogDescription>
            </DialogHeader>
            <div className="grid gap-4 py-4">
              <div className="grid grid-cols-2 gap-4">
                <div className="space-y-2">
                  <Label htmlFor="name">Product Name</Label>
                  <Input id="name" defaultValue={editingProduct?.name || ""} placeholder="Enter product name" />
                </div>
                <div className="space-y-2">
                  <Label htmlFor="category">Category</Label>
                  <Select defaultValue={editingProduct?.categoryId || ""}>
                    <SelectTrigger>
                      <SelectValue placeholder="Select category" />
                    </SelectTrigger>
                    <SelectContent>
                      <SelectItem value="1">Jerseys</SelectItem>
                      <SelectItem value="2">Kits</SelectItem>
                      <SelectItem value="3">Training Wear</SelectItem>
                      <SelectItem value="4">Accessories</SelectItem>
                    </SelectContent>
                  </Select>
                </div>
              </div>
              <div className="space-y-2">
                <Label htmlFor="description">Description</Label>
                <Textarea
                  id="description"
                  defaultValue={editingProduct?.description || ""}
                  placeholder="Enter product description"
                />
              </div>
              <div className="grid grid-cols-3 gap-4">
                <div className="space-y-2">
                  <Label htmlFor="price">Price ($)</Label>
                  <Input
                    id="price"
                    type="number"
                    step="0.01"
                    defaultValue={editingProduct?.price || ""}
                    placeholder="0.00"
                  />
                </div>
                <div className="space-y-2">
                  <Label htmlFor="stock">Stock</Label>
                  <Input id="stock" type="number" defaultValue={editingProduct?.stock || ""} placeholder="0" />
                </div>
                <div className="space-y-2">
                  <Label htmlFor="discount">Discount (%)</Label>
                  <Input
                    id="discount"
                    type="number"
                    min="0"
                    max="100"
                    defaultValue={editingProduct?.discount || ""}
                    placeholder="0"
                  />
                </div>
              </div>
              <div className="space-y-2">
                <Label htmlFor="images">Product Images</Label>
                <Input id="images" type="file" multiple accept="image/*" />
                <p className="text-xs text-muted-foreground">
                  Upload multiple images. First image will be the primary image.
                </p>
              </div>
            </div>
            <DialogFooter>
              <Button variant="outline" onClick={() => setIsDialogOpen(false)}>
                Cancel
              </Button>
              <Button onClick={handleSave}>{editingProduct ? "Update Product" : "Create Product"}</Button>
            </DialogFooter>
          </DialogContent>
        </Dialog>
      </div>

      <Card>
        <CardHeader>
          <CardTitle>Product Inventory</CardTitle>
          <CardDescription>A list of all products in your store</CardDescription>
        </CardHeader>
        <CardContent>
          <div className="flex items-center space-x-2 mb-4">
            <Search className="h-4 w-4 text-muted-foreground" />
            <Input
              placeholder="Search products..."
              value={searchTerm}
              onChange={(e) => setSearchTerm(e.target.value)}
              className="max-w-sm"
            />
          </div>

          <Table>
            <TableHeader>
              <TableRow>
                <TableHead>Product</TableHead>
                <TableHead>Category</TableHead>
                <TableHead>Price</TableHead>
                <TableHead>Stock</TableHead>
                <TableHead>Status</TableHead>
                <TableHead className="text-right">Actions</TableHead>
              </TableRow>
            </TableHeader>
            <TableBody>
              @foreach($products as $product)
                <TableRow key={$product->id}>
                  <TableCell>
                    <div className="flex items-center space-x-3">
                      <img
                        src={$product->images[0]?.url || "/placeholder.svg?height=40&width=40"}
                        alt={$product->name}
                        className="h-10 w-10 rounded-md object-cover"
                      />
                      <div>
                        <div className="font-medium">{$product->name}</div>
                        <div className="text-sm text-muted-foreground">{$product->description.substring(0, 50)}...</div>
                      </div>
                    </div>
                  </TableCell>
                  <TableCell>{$product->category?.name}</TableCell>
                  <TableCell>
                    <div className="flex items-center space-x-2">
                      <span>${$product->price.toFixed(2)}</span>
                      @if($product->discount > 0)
                        <Badge variant="secondary">{$product->discount}% off</Badge>
                      @endif
                    </div>
                  </TableCell>
                  <TableCell>
                    <Badge variant={$product->stock > 10 ? "default" : $product->stock > 0 ? "secondary" : "destructive"}>
                      {$product->stock} in stock
                    </Badge>
                  </TableCell>
                  <TableCell>
                    <Badge variant={$product->status === "active" ? "default" : "secondary"}>{$product->status}</Badge>
                  </TableCell>
                  <TableCell className="text-right">
                    <DropdownMenu>
                      <DropdownMenuTrigger asChild>
                        <Button variant="ghost" className="h-8 w-8 p-0">
                          <MoreHorizontal className="h-4 w-4" />
                        </Button>
                      </DropdownMenuTrigger>
                      <DropdownMenuContent align="end">
                        <DropdownMenuItem>
                          <Eye className="h-4 w-4 mr-2" />
                          View
                        </DropdownMenuItem>
                        <DropdownMenuItem onClick={() => handleEdit($product)}>
                          <Edit className="h-4 w-4 mr-2" />
                          Edit
                        </DropdownMenuItem>
                        <DropdownMenuItem onClick={() => handleDelete($product->id)} className="text-red-600">
                          <Trash2 className="h-4 w-4 mr-2" />
                          Delete
                        </DropdownMenuItem>
                      </DropdownMenuContent>
                    </DropdownMenu>
                  </TableCell>
                </TableRow>
              @endforeach
            </TableBody>
          </Table>
        </CardContent>
      </Card>
    </div>
  )
}
