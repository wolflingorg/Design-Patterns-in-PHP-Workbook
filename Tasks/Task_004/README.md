# Task # 4

### Multi-layered menu

Create a class for working with a multi-layered menu. 

Each menu's child should have:
 - name
 - link to go (if it is a final layer)
 - list of submenus
 - isActive(string $currentUrl) method (all parent levels should be isActive when any child isActive)