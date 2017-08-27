$(document).ready(function(){
    $('#articleListTree').jstree(
        {
            types : {
                default : {
                    icon : false
                }
            },
            plugins : [ "types" ],
            core: {
                data: [
                    {
                        text: 'HTML',
                        children: [
                            {'text': '文档类型介绍'},
                            {'text': 'head子元素用法含义总结'},
                            {'text': 'form表单使用介绍'},
                        ]
                    },
                    {
                        text: 'CSS',
                        children: [
                            {'text': '元素定位'},
                            {'text': 'CSS动画'},
                        ]
                    },
                    {
                        text: 'JS',
                        children: [
                            {'text': '数据类型总结及应用'},
                            {'text': '闭包理解及应用'},
                            {'text': '对象'},
                        ]
                    },
                    {
                        text: 'PHP',
                        children: [
                            {'text': '开发环境配置'},
                            {'text': '安全策略'},
                        ]
                    },
                    {
                        text: 'MySQL',
                        children: [
                            {'text': '设计规范'},
                            {'text': '视图与触发器'},
                            {'text': '游标与存储过程'},
                            {'text': '优化'},
                            {'text': '事务机制与锁机制'},
                            {'text': '数据备份与恢复'}
                        ]
                    },
                    {
                        text: 'Linux',
                        children: [
                            {'text': '简介'},
                            {'text': '权限管理学习'},
                            {'text': '常用命令总结'},
                        ]
                    },
                    {
                        text: '技术专题',
                        children: [
                            {
                                text: 'web前端',
                                children: [
                                    {
                                        text: '兼容性总结',
                                    },
                                    {'text': '文件上传'},
                                    {'text': '跨域'},
                                    {'text': '模块化编程'},
                                    {'text': '性能优化'},
                                    {'text': '视频播放'}
                                ]
                            },
                            {
                                text: '移动端',
                                children: [

                                ]
                            },
                            {
                                text: 'php后端',
                                children: [

                                ]
                            },
                            {
                                text: 'mysql数据库',
                                children: [

                                ]
                            },
                            {
                                text: 'linux服务器',
                                children: [

                                ]
                            }
                        ]
                    },
                    {
                        text: '学习路线',
                        children: [
                            {
                                text: '前端开发路线',
                                children: [
                                    {'text': 'web前端'},
                                    {'text': '移动端'}
                                ]
                            },
                            {'text': 'PHP学习路线'}
                        ]
                    }
                ]
            }
        }
    ).on("changed.jstree", function (e, data) {
        console.log(data.selected);
    });
});