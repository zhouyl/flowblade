<?php

namespace Flowblade\Mcp\Servers;

use Flowblade\Mcp\Resources\ComponentDocumentationResource;
use Flowblade\Mcp\Tools\GetComponentInfoTool;
use Flowblade\Mcp\Tools\ListComponentsTool;
use Flowblade\Mcp\Tools\SearchComponentsTool;

/**
 * Flowblade MCP Server
 *
 * This server provides AI clients with access to Flowblade component information,
 * documentation, and utilities through the Model Context Protocol.
 */
class FlowbladeServer
{
    /**
     * The MCP server's name.
     */
    protected string $name = 'Flowblade Server';

    /**
     * The MCP server's version.
     */
    protected string $version = '1.0.0';

    /**
     * The MCP server's instructions for the LLM.
     */
    protected string $instructions = <<<'INSTRUCTIONS'
This server provides comprehensive information about Flowblade components, a Laravel Blade component library built with Flowbite and Tailwind CSS.

You can use this server to:
1. List all available Flowblade components
2. Get detailed information about specific components
3. Search for components by name or functionality
4. Access component documentation and usage examples

Flowblade includes 98+ components organized into categories:
- Layout Components (Box, Container, Flex, Grid, Stack, etc.)
- Button Components (Button, IconButton, CloseButton, ButtonGroup)
- Data Display Components (Card, Badge, Tag, Avatar, Table, etc.)
- Navigation Components (Navbar, Sidebar, Breadcrumb, Pagination, etc.)
- Form Components (Input, Select, Checkbox, Radio, Datepicker, etc.)
- Overlay Components (Modal, Drawer, Tooltip, Popover, etc.)
- Feedback Components (Alert, Toast, Progress, Spinner, etc.)
- Typography Components (Heading, Text, Code, Blockquote, etc.)
- Media Components (Gallery, Carousel, QRCode, Video, etc.)

All components support Flowbite styling and Tailwind CSS customization.
INSTRUCTIONS;

    /**
     * The tools registered with this MCP server.
     *
     * @var array<int, class-string>
     */
    protected array $tools = [
        ListComponentsTool::class,
        GetComponentInfoTool::class,
        SearchComponentsTool::class,
    ];

    /**
     * The resources registered with this MCP server.
     *
     * @var array<int, class-string>
     */
    protected array $resources = [
        ComponentDocumentationResource::class,
    ];

    /**
     * Get the server's name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the server's version.
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * Get the server's instructions.
     */
    public function getInstructions(): string
    {
        return $this->instructions;
    }

    /**
     * Get the registered tools.
     */
    public function getTools(): array
    {
        return $this->tools;
    }

    /**
     * Get the registered resources.
     */
    public function getResources(): array
    {
        return $this->resources;
    }
}
