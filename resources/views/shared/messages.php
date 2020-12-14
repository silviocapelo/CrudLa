<?php

    return [
        'user' => [
            'success' => [
                'store' => 'Usuário adicionado com sucesso',
                'update'=> 'Usuário alterado com sucesso'
            ],
            'error' => [
                'store'  => 'Não foi possível adicionar usuário',
                'update' => 'Não foi possível alterar usuário'
            ],
        ],
        'goal' => [
            'success' => [
                'store' => 'Meta adicionada com sucesso',
                'update'=> 'Meta alterada com sucesso'
            ],
            'error' => [
                'store'  => 'Não foi possível alterar meta',
                'update' => 'Não foi possível alterar meta'
            ],

        ],
        'message' => [
            'success' => [
                'store' => 'Mensagem enviada com sucesso',
                'update'=> 'Mensagem alterada com sucesso'
            ],
            'error' => [
                'store'  => 'Não foi possível enviar a mensagem',
                'update' => 'Não foi possível alterar a mensagem'
            ],

        ],
        'notification' => [
            'success' => [
                'store' => 'Notificação criada com sucesso',
                'update'=> 'Notificação alterada com sucesso'
            ],
            'error' => [
                'store'  => 'Não foi possível criar a notificação',
                'update' => 'Não foi possível alterar a notificação'
            ],

        ],
        'sector' => [
            'success' => [
                'store' => 'Setor adicionado com sucesso',
                'update'=> 'Setor alterado com sucesso'
            ],
            'error' => [
                'store'  => 'Não foi possível adicionar setor',
                'update' => 'Não foi possível alterar o setor'
            ],

        ],

        'sector_delete' => [

            'success_delete' => [
                'insert'  => 'Setor removido com sucesso',
            ],
            'error_delete' => [
                'insert'  => 'Não foi possível remover, há cadastro utilizando esse setor',
            ],

        ],
        'content' => [
            'success' => [
                'store' => 'Conteúdo adicionado com sucesso',
                'update'=> 'Conteúdo alterado com sucesso'
            ],
            'error' => [
                'store'  => 'Não foi possível adicionar conteúdo',
                'update' => 'Não foi possível alterar o conteúdo'
            ],

        ],
        'tip' => [
            'success' => [
                'store' => 'Dica cadastrada com sucesso',
                'update'=> 'Dica alterada com sucesso'
            ],
            'error' => [
                'store'  => 'Não foi possível adicionar dica',
                'update' => 'Não foi possível alterar a dica'
            ],
        ],
        'tipConfig' => [
            'success' => [
                'update'=> 'Configurações salvas com sucesso'
            ],
            'error' => [
                'update' => 'Não foi possível salvar as configurações'
            ],
        ],
        'file' => [
            'success' => [
                'store'=> 'Arquivo enviado com sucesso'
            ],
            'error' => [
                'nullable' => 'Insira um arquivo para enviar',
                'extension' => 'Extensão de arquivo inválida. Extensão válida (csv)'
            ],
        ],


        'resetPassword' => [
            'success' => [
                'update'=> 'Senha alterada com sucesso'
            ],
            'error' => [
                'update' => 'Não foi possível salvar as configurações'
            ],
        ],

        'api' => [
            'users' => [
                'error'  => [
                    'not_found' => 'Usuário não encontrado',
                ],
                'reset_password' => [
                    'empty_email' => 'Usuário não tem e-mail',
                ],
            ],
            'wheel_of_live' => [
                'success'  => [
                    'store' => 'Registered successfully',
                ],
                'message'  => [
                    'not-found' => 'Não há itens cadastrados',
                ],

            ],

            'contents' => [
                'error'  => [
                    'not_found' => 'Conteúdo não encontrado',
                ],
            ],
        ],

        'report' => [
            'export_error' => 'Erro ao exportar relatório'
        ]
    ];
