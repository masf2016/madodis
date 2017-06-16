package br.edu.facol.gestaoacademicaweb.pojo;

public class MediaRetorno {

	private Aluno aluno;
	private Turma turma;
	private String notas;
	private String media;
	
	public MediaRetorno(Aluno aluno, Turma turma, String notas, String media) {
		this.aluno = aluno;
		this.turma = turma;
		this.notas = notas;
		this.media = media;
	}

	public Aluno getAluno() {
		return aluno;
	}

	public void setAluno(Aluno aluno) {
		this.aluno = aluno;
	}

	public Turma getTurma() {
		return turma;
	}

	public void setTurma(Turma turma) {
		this.turma = turma;
	}

	public String getNotas() {
		return notas;
	}

	public void setNotas(String notas) {
		this.notas = notas;
	}

	public String getMedia() {
		return media;
	}

	public void setMedia(String media) {
		this.media = media;
	}

}
