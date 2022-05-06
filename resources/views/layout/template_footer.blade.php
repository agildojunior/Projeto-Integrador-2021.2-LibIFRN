
<style>
	
	.footer{
		background-color: #2d2b32;
	}
	.containerdiv{
		max-width: 1170px;
		margin:auto;
	}
	.row2{
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		margin: 0;
		
	}
	.ulfooter{
		list-style: none;
		padding-left: 0;
	}
	.footerdiv{
		background-color: #24262b;
		padding: 70px 0;
	}
	.footer-div{
	width: 25%;
	padding: 0 15px;
	box-sizing: border-box;
	margin: 0;
	}
	.footer-div h4{
		font-family: 'Poppins', sans-serif;
		font-size: 18px;
		color: #ffffff;
		text-transform: capitalize;
		margin-bottom: 35px;
		font-weight: 500;
		position: relative;
	}
	.footer-div h4::before{
		content: '';
		position: absolute;
		bottom: -10px;
		background-color: #5dc443;
		height: 2px;
		box-sizing: border-box;
		width: 50px;
	}
	.footer-div ul li:not(:last-child){
		margin-bottom: 10px;
	}
	.footer-div ul li a{
		font-family: 'Poppins', sans-serif;
		font-size: 16px;
		text-transform: capitalize;
		color: #ffffff;
		text-decoration: none;
		font-weight: 300;
		color: #bbbbbb;
		display: block;
		transition: all 0.3s ease;
	}
	.footer-div ul p{
		font-family: 'Poppins', sans-serif;
		font-size: 16px;
		text-transform: capitalize;
		color: #ffffff;
		text-decoration: none;
		font-weight: 300;
		color: #bbbbbb;
		display: block;
		transition: all 0.3s ease;
		margin-right: 22px;
	}
	.footer-div ul li a:hover{
		color: #ffffff;
		padding-left: 8px;
	}
	.footer-div .social-links a{
		display: inline-block;
		height: 40px;
		width: 40px;
		background-color: rgba(255,255,255,0.2);
		margin:0 10px 10px 0;
		text-align: center;
		line-height: 40px;
		border-radius: 50%;
		color: #ffffff;
		transition: all 0.5s ease;
	}
	.footer-div .social-links a:hover{
		color: #24262b;
		background-color: #ffffff;
	}
</style>
<footer class="footer">
            <div class="containerdiv">
                <div class="row2">
                    <div class="footer-div">
                        <h4>Biblioteca</h4>
                        <ul class="ulfooter">
                            <li><a href="home">Inicio</a></li>
                            <li><a href="allbook">Biblioteca</a></li>
                            <li><a href="home">Sobre</a></li>
                            <li><a href="https://www.facebook.com/ifrnoficial/">Redes sociais</a></li>
                        </ul>
                    </div>
                    <div class="footer-div">
                        <h4>Sobre</h4>
                        <ul class="ulfooter">
                            <p>A Biblioteca Paulo Freire tem como objetivos ser uma Unidade Informacional capaz de dar apoio ao ensino, à pesquisa e extensão disponibilizando o acesso à informação em suporte bibliográfico, virtual e digital.</p>
                        </ul>
                    </div>
                    <div class="footer-div">
                        <h4>Redes Sociais</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com/ifrnpaudosferros"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://twitter.com/ifrn_noticias"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/ifrnpaudosferros"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">